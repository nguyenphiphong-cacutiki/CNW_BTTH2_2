<?php 
class ShowService{
    private $conn;
    function __construct(Database $db)
    {
        $this->conn = $db->getConn();
    }
    function getAll(){
        $sqlQuery = "
                SELECT p.id, p.title, p.message, p.category_id, u.first_name, 
                u.last_name, p.status, p.created, p.updated, c.name as category
                FROM cms_posts p
                LEFT JOIN cms_category c ON c.id = p.category_id
                LEFT JOIN cms_user u ON u.id = p.userid
                WHERE p.status ='published' ORDER BY p.id DESC";
                
            $stmt = $this->conn->prepare($sqlQuery);	
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;	
    }
}
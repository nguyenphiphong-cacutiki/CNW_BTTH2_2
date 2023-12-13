<?php 
include 'config/config.php';
include   'config/Database.php';
include 'services/DetailService.php';
class DetailController{
    private $db = null;
    function __construct()
    {
        $this->db = new Database();
    }
    function show($id){
        $details = new DetailService($this->db);
        $res = $details->getDetails($id);
        include ROOT.'/views/detail.php';
    }
}
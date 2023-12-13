<?php 
include 'config/config.php';
include 'config/Database.php';
include 'services/ShowService.php';
class ShowController{
    private $db = null;
    function __construct()
    {
        $this->db = new Database();
    }
    function show(){
        $showService = new ShowService($this->db);
        $arr = $showService->getAll();
        include ROOT.'/views/index.php';

    }

}
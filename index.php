<?php 

$c = isset($_GET['c'])? $_GET['c']:'home_guest';
$a = isset($_GET['a'])? $_GET['a']:'show_guest';
$id = isset($_GET['id'])? $_GET['id']:0;



if($c == 'home_guest' && $a == 'show_guest'){
    include 'controllers/ShowController.php';
    $myShowController = new ShowController();
    $myShowController->show();
}else if($c == 'home_guest' && $a == 'detail'){
    include 'controllers/DetailController.php';
    $myDetailCtr = new DetailController();
    $myDetailCtr->show($id);
}
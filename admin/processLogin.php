<?php 

require_once '../config/Database.php';
        if(isset($_POST['email']) && isset($_POST['password'])){
            $db = new Database();
            $conn = $db->getConn();
            if($conn != null){
                $email = $_POST['email'];
                $stmt = $conn->prepare("select * from cms_user where email = '".$email."'");
                $stmt->execute();
                $res = $stmt->fetch();
                if($res){
                    if($_POST['password'] == $res['password']){
                        header('Location:index.php');
                    }else{
                        header('Location:login.php?password invalid');
                    }
                }else{
                    header('Location:login.php?error=email not found');
                }
            }else{
                echo 'error connect';
            }


        }
?>
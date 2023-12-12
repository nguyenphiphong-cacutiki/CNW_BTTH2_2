<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../asset/bootstrap-5.3.2/css/bootstrap.min.css">
</head>
<body>
    <ul class="nav bg-dark px-5">
        <li class="nav-item"><a href="" class="nav-link text-decoration-none text-white"><i class="fa-solid fa-gear"></i></a></li>
        <li class="nav-item"><a href="" class="nav-link fw-bold fs-24 text-success">DASHBORD</a></li>
        <li class="nav-item"><a href="" class="nav-link fs-18">Manager ...</a></li>
    </ul>
    <div class="row px-4">
        <div class="col-2">
            <ul class="nav flex-column p-2">
                <li class="nav-item"><a href="" class="nav-link"><i class="fa-solid fa-gear"></i>  Dashboard</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i class="fa-solid fa-pencil"></i> Posts</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i class="fa-solid fa-table-columns"></i> Categorys</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i class="fa-regular fa-user"></i> User</a></li>
            </ul>
        </div>
        <div class="col-10 px-2 py-2">
            <?php
                require_once '../config/Database.php';
                $db = new Database();
                $conn = $db->getConn();
                if($conn != null){
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->prepare("select p.id, p.title, c.name as category, u.first_name, 
                        u.last_name,p.message, p.status, p.created, p.updated from cms_user u inner join cms_posts p
                        on u.id = p.userid inner join cms_category c on p.category_id = c.id where p.id = '".$id."'");
    
                        $stmt->execute();
                        $row = $stmt->fetch();
                    }
                }else{
                    echo 'connect error';
                }
            
            ?>
            <?php if($row):?>
                <?php 
                    $dateCreate = date_create($row['created']);
                    $created = date_format($dateCreate, "d M Y");
                    $dateUpdated = date_create($row['updated']);
                    $updated = date_format($dateUpdated, "d M Y");
                ?>
                <h4 class="text-center text-success text-uppercase"><?=$row['title']?></h4>
                <p><span class="text-primary fs-20">Category: <?=$row['category']?> </span> <span class="text-success fs-20">. post by: <?=$row['first_name'].' '.$row['last_name']?></span> <span class="float-end fs-18 text-dark">last modify: <?=$updated?>   <a href="./update_main.php" class="btn btn-danger"><i class="fa-regular fa-pen-to-square"></i></a></span> </p>
                
                <p class="text-body fs-18" style="text-align: justify;"><?=$row['message']?></p>
                    
              
            <?php endif; ?>    
        </div>
    </div>
    



    <!-- link lib  -->
    <script src="../asset/fontawesome/js/all.min.js"></script>
    <script src="../asset/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/jquery-3.7.1.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/bootstrap-5.3.2/css/bootstrap.min.css">
    <?php
        include './config/Database.php';
        include './class/article.php';
        $mes = '';
        $date = '';
        $user = '';
        $title = 'Title';
        if(isset($_GET['id'])){
            $db = new Database();
            $article = new Article($db);
            $res = $article->getArticleById($_GET['id']);
            $mes = $res['message'];
            $date = date_format(date_create($res['created']), "d F Y");
            $user = $res['first_name'] .' '. $res['last_name'];
            $title = $res['title'];
        }
        
    
    ?>
    <title><?=$title?></title>
</head>
<?php include './layout/header.php'; ?>
<body>
    <div class="container">
        <div class="row p-3 mt-3 mb-3">
            <div class="col-12">
                <h2 class="text-center fs-3 mt-3"><?=$title?></h2>
                <h4>Post by <span><?=$user?></span> on <span><?=$date?></span></h4>
                <p class="text-body" style="text-align: justify;"><?=$mes?></p>
                <a class="btn btn-secondary float-end" href="index.php">Back</a>
            </div>
        </div>
    </div>
     

    <!-- link lib  -->
    <script src="./asset/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="./asset/jquery-3.7.1.min.js"></script>
</body>
</html>

<?php include './layout/footer.php'; ?>
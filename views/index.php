<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="./asset/bootstrap-5.3.2/css/bootstrap.min.css">
</head>
<body>
    <?php include ROOT.'/views/layout/header.php'; ?>
    <div class="container mt-5">
        <?php foreach($arr as $row): ?>
            <?php 
                $dateCreate = date_create($row['created']); // cast datetime in data to date format
                $date = date_format($dateCreate, "d F Y"); // format
                $mes = substr($row['message'], 0, 200).'...';
            ?>
        <div class="row  d-flex justify-content-center">
            <div class="col-8">
                <div>
                    <h1 class="text-primary fs-3"><?=$row['title']?></h1>
                    <h3>Published on <?=$date?> Category: <?=$row['category']?></h3>
                    <p class="text-body" style="text-align: justify;"><?=$mes?></p>
                    <a href="<?=DOMAIN.'/index.php?a=detail&id='. $row['id']?>" class="btn btn-success text-transform float-end">read more</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
    <?php include ROOT.'/views/layout/footer.php'; ?>





    <!-- link lib  -->
    <script src="./asset/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="./asset/jquery-3.7.1.min.js"></script>
</body>
</html>
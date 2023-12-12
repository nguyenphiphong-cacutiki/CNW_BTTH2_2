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
            <h4 class="fw-bold text-center text-success fs-22 text-uppercase">Post editing</h4>

            <form>
                <div class="input-group">
                    <span class="input-group-text fw-bold bg-light">Title</span>
                    <input type="text" class="form-control" placeholder="">
                </div>
                
                <div class="input-group mt-2">
                    <span class="input-group-text fw-bold bg-light">Category</span>
                    <select class="form-select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text fw-bold bg-light">User</span>
                    <select class="form-select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text fw-bold bg-light">Status</span>
                    <select class="form-select">
                        <option>Publicsher</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>

                <div class="form-floating mt-2">
                    <input type="text" class="form-control" id="pwd" placeholder="message..." name="pswd">
                    <label for="pwd">note...</label>
                </div>
                <div class="form-floating mt-2">
                    <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Message</label>
                </div>
               
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
            
        </div>
    </div>
    



    <!-- link lib  -->
    <script src="../asset/fontawesome/js/all.min.js"></script>
    <script src="../asset/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/jquery-3.7.1.min.js"></script>
</body>
</html>
<?php 

require "libs/vars.php";
require "libs/functions.php";

$error_message = '';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == 'username' and $password == 'password' ){
        setcookie("username",$username,time() + (60*60));
        setcookie("login",true, time() + (60*60));
        header('Location: index.php');
        exit();
    } else {
        $error_message = 'Yanlış kullanıcı adı veya şifre girdiniz.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .alert {
            position: fixed;
            top: 70px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1050;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top mb-4">
    <div class="container">
        <a href="/" class="navbar-brand">Shoe Store</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="create.php" class="nav-link">Create</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Link 2</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Link 3</a>
                </li>
            </ul>

            <div class="navbar-nav ml-auto">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <?php if(isset($_COOKIE["login"])): ?>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Hoş Geldiniz, <?php echo $_COOKIE["username"] ?></a>
                    </li>

                    <?php else: ?>
                        <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">Register</a>
                    </li>
                    <?php endif; ?>
                    
                </ul>

                <form action="index.php" class="form-inline" role="search" method="GET">
                    <input type="text" name="q" class="form-control me-2" placeholder="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<?php if (!empty($error_message)): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error_message; ?>
    </div>
<?php endif; ?>

<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="login.php" method="POST">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" name="username" id="username" required><br>

                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" required><br>
                        
                        <button type="submit" name="login" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

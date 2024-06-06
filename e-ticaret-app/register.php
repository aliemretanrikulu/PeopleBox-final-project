<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top mb-5">
        <div class="container">
            <a href="/" class="navbar-brand">Shoe Store</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <?php if (isset($_COOKIE["login"])): ?>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link">Logout</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Hoş Geldiniz, username <?php echo $_COOKIE["username"] ?></a>
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

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="register.php" method="POST">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" class="form-control" required><br>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required><br>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required><br>
                            <button type="submit" class="btn btn-success">Register</button>
                            <button type="clear" class="btn btn-danger">Clear</button>
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
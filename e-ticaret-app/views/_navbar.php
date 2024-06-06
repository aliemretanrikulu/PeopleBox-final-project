<?php 

if(!empty($_GET['q'])){
    $word = $_GET['q'];

    $products = array_filter($products, function($product) use($word){
            return stristr($product['model'], $word);
    });

}

?>

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

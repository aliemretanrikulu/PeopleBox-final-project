<?php 

if(!empty($_GET['q'])){
    $word = $_GET['q'];
    
    $filteredProducts = array_filter($products, function($product) use ($word){
        return stristr($product['brand'], $word) || stristr($product['model'], $word); 
    });

}

?>



<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top mb-4">
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
            
            <form action="index.php" class="form-inline ml-auto" role="search" method="GET">
                <input type="text" name="q" class="form-control me-2" placeholder="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>


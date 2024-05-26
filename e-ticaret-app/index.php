<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .list-group-item {
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 5px;
        }

        .card {
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        <?php
        $brands = ["Nike", "Puma", "Adidas", "Vans"];
        $products = [
            [
                "model" => "Nike Air Force",
                "brand" => "Nike",
                "price" => "5.200₺",
                "color_count" => 3,
                "stock" => "Var",
                "image" => "img/1.jpeg",
                "comment" => 20,
                "url" => "Nike-Air-Force"
            ],
            [
                "model" => "Puma Daily",
                "brand" => "Puma",
                "price" => "2.800₺",
                "color_count" => 4,
                "stock" => "Var",
                "image" => "img/2.jpeg",
                "comment" => 9,
                "url" => "Puma-Daily"
            ],
            [
                "model" => "Adidas Superstar",
                "brand" => "Adidas",
                "price" => "5.000₺",
                "color_count" => 2,
                "stock" => "Tükendi",
                "image" => "img/3.jpeg",
                "comment" => 36,
                "url" => "Adidas-Superstar"
            ],
            [
                "model" => "Vans Old Skool",
                "brand" => "Vans",
                "price" => "4.100₺",
                "color_count" => 2,
                "stock" => "Var",
                "image" => "img/4.jpeg",
                "comment" => 0,
                "url" => "Vans-Old-Skool"
            ]
        ]; ?>

        <div class="row">
            <div class="col-md-3">
                <h1 class="mb-3">Markalar</h1>
                <ul class="list-group mb-3">
                    <?php foreach ($brands as $brand): ?>
                        <li class="list-group-item">
                            <?php echo $brand; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php foreach ($products as $product): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['model']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo $product['url']; ?>"><?php echo $product['model']; ?></a>
                                    </h5>
                                    <p class="card-text text-primary">Fiyat: <?php echo $product['price']; ?></p>
                                    <p class="card-text text-info">Renk Sayısı: <?php echo $product['color_count']; ?></p>
                                    <p class="card-text text-info">Yorum Sayısı: <?php echo $product['comment'] > 0 ? $product['comment'] : 'Yorum yok'; ?></p>
                                    <p class="card-text <?php echo $product['stock'] == 'Tükendi' ? 'text-danger' : 'text-success'; ?>">
                                        Stok Durumu: <?php echo $product['stock']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

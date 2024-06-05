<div class="container my-4">
    <p>
    <h1 class="mt-5">Markalar</h1>
        <?php
        $num_categories = count($brands);
        $num_products = count($products);
        echo "$num_categories kategoride $num_products ürün listelenmiştir";
        ?>
    </p>

    <div class="row">
        <div class="col-md-3">
            <ul class="list-group mb-3" style="margin-top: 60px;">
                <?php foreach ($brands as $brand): ?>
                    <li class="list-group-item" onclick="window.location.href='marka.php?marka=<?php echo $brand;?>'">
                        <?php echo $brand; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-md-4 mb-4" style="margin-top: 60px;">
                        <div class="card">
                            <img src="<?php echo $product['image']; ?>" class="card-img-top"
                                alt="<?php echo $product['image']; ?>">

                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $product['url']; ?>"><?php echo $product['model']; ?></a>
                                </h5>
                                <p class="card-text text-info">Fiyat: <?php echo $product['price']; ?></p>
                                <p class="card-text text-info">Renk Sayısı: <?php echo $product['color_count']; ?></p>
                                <p class="card-text text-info">Yorum Sayısı:
                                    <?php echo $product['comment'] > 0 ? $product['comment'] : 'Yorum yok'; ?>
                                </p>
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

<div class="container my-4">
    <?php
    $brands = ["Nike", "Puma", "Adidas", "Vans"];
    ?>

    <div class="row">
        <div class="col-md-3">
            <ul class="list-group mb-3">
                <?php foreach ($brands as $brand): ?>
                    <li class="list-group-item"> <?php echo $brand; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?php echo $product['image']; ?>" class="card-img-top"
                                alt="<?php echo $product['image']; ?>">

                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $product['url']; ?>"> <?php echo $product['model']; ?></a>
                                </h5>
                                <p class="card-text text-info">Fiyat: <?php echo $product['price']; ?></p>
                                <p class="card-text text-info">Renk Sayısı: <?php echo $product['color_count']; ?></p>
                                <p class="card-text text-info">Yorum Sayısı:
                                    <?php echo $product['comment'] > 0 ? $product['comment'] : 'Yorum yok'; ?>
                                </p>
                                <p
                                    class="card-text <?php echo $product['stock'] == 'Tükendi' ? 'text-danger' : 'text-success'; ?>">
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
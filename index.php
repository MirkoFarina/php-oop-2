<?php

require_once __DIR__ . '/DataBase/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once __DIR__ . '/views/layout/head.php'; ?>

<body>
    <?php require_once __DIR__ . '/views/layout/header.php'; ?>
    <h1 class="text-center my-5">
        ECCO TUTTI I NOSTRI PRODOTTI
    </h1>
    <div class="container">
        <div class="row my-5">
            <?php foreach ($allProducts as $product) : ?>
                <div class="col-6 my-2">
                    <div class="card">
                        <img src="<?php echo $product->img  ?>" class="card-img-top" alt="<?php echo $product->name ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $product->full_item_name ?></h5>
                            <div>
                                <img style="width: 40px;" src="<?php echo $product->category->icon ?>" alt="<?php echo $product->category->name ?>">
                                <span>
                                    <?php echo $product->category->name ?>
                                </span>
                            </div>
                            <ul>
                                <li>
                                    Prezzo: <?php echo $product->price  ?>&euro;
                                </li>
                                <?php if (property_exists($product, 'ingredients')) : ?>
                                    <li>
                                        Ingredienti: <?php echo $product->ingredients ?>
                                    </li>
                                <?php endif; ?>
                                <?php if (isset($product->weight)) : ?>
                                    <li>
                                        Peso: <?php echo $product->weight ?>
                                    </li>
                                <?php endif; ?>
                                <?php if (isset($product->size)) : ?>
                                    <li>
                                        Taglia: <?php echo $product->size ?>
                                    </li>
                                <?php endif; ?>
                                <?php if (isset($product->material)) : ?>
                                    <li>
                                        Materiali: <?php echo $product->material ?>
                                    </li>
                                <?php endif; ?>
                                <?php if (isset($product->feature)) : ?>
                                    <li>
                                        Utilizzo: <?php echo $product->feature ?>
                                    </li>
                                <?php endif; ?>
                                <?php if (isset($product->type)) : ?>
                                    <li>
                                        Tipo: <?php echo $product->type ?>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>
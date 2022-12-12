<?php

require_once __DIR__ . '/DataBase/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ . '/views/layout/head.php'; ?>

<body>
    <?php require_once __DIR__ . '/views/layout/header.php'; ?>

    <main>
        <h1 class="text-center my-5">
            Cibo
        </h1>
        <div class="container">
            <div class="row my-5">
                <?php foreach ($foods as $food) : ?>
                    <div class="col-6">
                        <div class="card">
                            <img src="<?php echo $food->img ?>" class="card-img-top" alt="<?php echo $food->full_item_name ?>">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $food->full_item_name ?></h5>
                                <div>
                                    <img style="width: 40px;" src="<?php echo $food->category->icon ?>" alt="<?php echo $food->category->name ?>">
                                    <span>
                                        <?php echo $food->category->name ?>
                                    </span>
                                </div>
                                <ul>
                                    <li>
                                        <?php echo $food->price ?>&euro;
                                    </li>
                                    <li>
                                        Brand: <?php echo $food->brand ?>
                                    </li>
                                    <li>
                                        Peso: <?php echo $food->weight ?>
                                    </li>
                                    <li>
                                        Ingredienti: <?php echo $food->ingredients ?>
                                    </li>
                                    <li>
                                        Taglia: <?php echo $food->size ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>

</html>
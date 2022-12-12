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
            Accessori
        </h1>

        <div class="container">
            <div class="row my-5">
                <?php foreach($accessories as $accessory) : ?>
                <div class="col-6">
                    <div class="card">
                        <img src="<?php echo $accessory->img ?>" class="card-img-top" alt="<?php echo $accessory->full_item_name ?>">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $accessory->full_item_name ?></h5>
                            <div>
                                <img style="width: 40px;" src="<?php echo $accessory->category->icon ?>" alt="<?php echo $accessory->category->name ?>">
                                <span>
                                    <?php echo $accessory->category->name ?>
                                </span>
                            </div>
                            <ul>
                                <li>
                                    <?php echo $accessory->price ?>&euro;
                                </li>
                                <li>
                                    Brand: <?php echo $accessory->brand ?>
                                </li>
                                <li>
                                    Materiali: <?php echo $accessory->material ?>
                                </li>
                                <li>
                                    Taglia: <?php echo $accessory->size ?>
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
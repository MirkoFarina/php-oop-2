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
            Giochi
        </h1>
        <div class="container">
            <div class="row my-5">
                <?php foreach ($toys as $toy) : ?>
                    <div class="col-6">
                        <div class="card">
                            <img src="<?php echo $toy->img ?>" class="card-img-top" alt="<?php echo $toy->full_item_name ?>">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $toy->full_item_name ?></h5>
                                <div>
                                    <img style="width: 40px;" src="<?php echo $toy->category->icon ?>" alt="<?php echo $toy->category->name ?>">
                                    <span>
                                        <?php echo $toy->category->name ?>
                                    </span>
                                </div>
                                <ul>
                                    <li>
                                        <?php echo $toy->price ?>&euro;
                                    </li>
                                    <li>
                                        Brand: <?php echo $toy->brand ?>
                                    </li>
                                    <li>
                                        Taglia: <?php echo $toy->size ?>
                                    </li>
                                    <li>
                                        Utilizzo: <?php echo $toy->feature ?>
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
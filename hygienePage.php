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
            Igiene
        </h1>
        <div class="container">
            <div class="row my-5">
                <?php foreach ($hygiene as $hygiene) : ?>
                    <div class="col-6">
                        <div class="card">
                            <img src="<?php echo $hygiene->img ?>" class="card-img-top" alt="<?php echo $hygiene->full_item_name ?>">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $hygiene->full_item_name ?></h5>
                                <div>
                                    <img style="width: 40px;" src="<?php echo $hygiene->category->icon ?>" alt="<?php echo $hygiene->category->name ?>">
                                    <span>
                                        <?php echo $hygiene->category->name ?>
                                    </span>
                                </div>
                                <ul>
                                    <li>
                                        <?php echo $hygiene->price ?>&euro;
                                    </li>
                                    <li>
                                        Typo: <?php echo $hygiene->type ?>
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
<?php 

require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../models/Food.php';
require_once __DIR__ . '/../models/Hygiene.php';
require_once __DIR__ . '/../models/Toy.php';
require_once __DIR__ . '/../models/Hygiene.php';


$dog = new Category(
    'Cani', 
    'https://thumbs.dreamstime.com/z/icona-di-vettore-del-profilo-dell-animale-domestico-cane-115679283.jpg'
);

$cat = new Category(
    'Gatti',
    'https://banner2.cleanpng.com/20180622/jzb/kisspng-cat-computer-icons-pet-5b2d8211e134c4.3453259815297090739225.jpg'
);

$horse = new Category(
    'Cavalli',
    'https://banner2.cleanpng.com/20180206/zvq/kisspng-horse-icon-horse-silhouette-vector-5a79595cb22680.4449623615179021727297.jpg'
);


$food = [
    new Food(
        155523, 
        'Crocchette', 
        'Prolife', 
        $dog, 
        11, 
        'https://animalsplanet.it/wp-content/uploads/2021/10/crocchette-per-cani-adulti-prolife-smart-taglia-piccola-gusto-trota-e-riso-2kg.jpg',
        2,
        'Trota e Riso',
        18
    ),
    new Food(
        55425,
        'Crocchette',
        'Natures\'s Protection',
        $dog,
        18,
        'https://animalsplanet.it/wp-content/uploads/2022/04/crocchette-per-cani-cuccioli-natures-protection-superior-care-per-manto-bianco-gusto-salmone-15kg-2.jpg',
        1.5,
        'Salmone',
        10
    )
];

var_dump($food);
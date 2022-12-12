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

$fish = new Category(
    'Pesci',
    'https://c8.alamy.com/compit/p2a1yy/pesce-icona-vettore-isolato-su-sfondo-trasparente-pesce-concetto-del-logo-p2a1yy.jpg'
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
    ),
    new Food(
        45612,
        'Crocchette',
        'Libra',
        $cat,
        6,
        'https://animalsplanet.it/wp-content/uploads/2021/04/cibo-per-gatti-adulti-sterilizzati-libra-sterilized-gusto-pollo-15kg.jpg',
        1.5,
        'Pollo',
        13
    ),
    new Food(
        89561,
        'Mangime',
        'Goldfish',
        $fish,
        2,
        'https://animalsplanet.it/wp-content/uploads/2022/04/mangime-per-pesci-rossi-tetra-goldfish-100ml.jpg',
        100 . 'ml',
        null,
        null
    )
];

var_dump($food);
<?php 

require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../models/Food.php';
require_once __DIR__ . '/../models/Hygiene.php';
require_once __DIR__ . '/../models/Toy.php';
require_once __DIR__ . '/../models/Accessory.php';


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


$foods = [
    new Food(
        155523, 
        'Crocchette', 
        'Prolife', 
        $dog, 
        11, 
        'https://animalsplanet.it/wp-content/uploads/2021/10/crocchette-per-cani-adulti-prolife-smart-taglia-piccola-gusto-trota-e-riso-2kg.jpg',
        '2kg',
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
        '1.5kg',
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
        '1.5kg',
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
        '100ml',
        null,
        null
    )
];


$toys = [
    new Toy(
        8789784,
        'Gioco da masticare',
        'atopo',
        $dog,
        19,
        'https://m.media-amazon.com/images/G/29/apparel/rcxgs/tile._CB483369964_.gif',
        'Gioco interattivo',
        'Grandi e Piccoli'
    ),
    new Toy(
        8489454,
        'Gioco',
        'Goldge',
        $cat,
        11,
        'https://m.media-amazon.com/images/G/29/apparel/rcxgs/tile._CB483369964_.gif',
        'Gioco Interattivo',
        'Piccoli'
    )
];

$hygiene = [
    new Hygiene(
        855522,
        'Toilette',
        'Farm Company',
        $cat,
        23,
        'https://animalsplanet.it/wp-content/uploads/2022/04/toilette-per-gatti-chiusa-farm-company-romeo-ecoline-con-porta-e-filtro-colore-azzurro-57x39x14cm.jpg',
        'Toilette Chiusa'
    ),
    new Hygiene(
        4984651,
        'Salviette',
        'Inodorina',
        $dog,
        4,
        'https://animalsplanet.it/wp-content/uploads/2021/04/salviette-per-cani-inodorina-green-con-lino-e-rosmarino-30pz.jpg',
        'Salviette'
    )
];

$accessories = [
    new Accessory(
        89847484,
        'Cuccia',
        'Nasonero',
        $dog,
        20,
        'https://animalsplanet.it/wp-content/uploads/2021/12/cuccia-divano-per-cani-nasonero-con-disegno-di-cagnolini-colore-grigio-52x42cm.jpg',
        'Tessuto',
        '52x42'
    ),
    new Accessory(
        898454,
        'Cuccia',
        'Nasonero',
        $cat,
        45,
        'https://animalsplanet.it/wp-content/uploads/2021/12/cuccia-igloo-per-gatti-nasonero-trama-blu-40x40x40cm.jpg',
        'Tessuto',
        '40x40x40'
    )
];

$allProducts = array_merge($foods, $accessories, $toys, $hygiene);

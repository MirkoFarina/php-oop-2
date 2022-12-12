<?php 

// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// - L’e-commerce vende **prodotti** per animali.
// - I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
// - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
// Allego lo schema fatto in classe (da considerarsi a titolo indicativo ma potete personalizzare come credete)
// buon lavoro!
class Product {
    public $id;
    public $name;
    public $brand;
    public $category;
    public $price;
    public $is_avaible = true;
    public $img;

    /**
     * @param Number $_id
     * @param String $_name
     * @param Array $_category
     * @param Number $_price
     * @param String $_img url img
     */
    public function __construct($_id, $_name, $_brand, $_category, $_price, $_img)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->category = $_category;
        $this->price = $_price;
        $this->img = $_img;
    }
}
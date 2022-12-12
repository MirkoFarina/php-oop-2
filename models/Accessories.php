<?php 


class Accessories extends Product {
    public $material;
    public $size;

    
     /**
     * @param Number $_id
     * @param String $_name
     * @param Array $_category
     * @param Number $_price
     * @param String $_img url img
     * @param String $_material materiale prodotto
     * @param String $_size grandezza prodotto
     */
    public function __construct($_id, $_name, $_brand, $_category, $_price, $_img, $_material, $_size)
    {
        parent::__construct($_id, $_name, $_brand, $_category, $_price, $_img);

        $this->material = $_material;
        $this->size = $_size;
    }
}
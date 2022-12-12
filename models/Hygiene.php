<?php 

class Hygiene extends Product {
    public $type;

     /**
     * @param Number $_id
     * @param String $_name
     * @param Category $_category
     * @param Number $_price
     * @param String $_img url img
     * @param String $_type tipo di prodotto
     */
    public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_img, $_type)
    {
        parent::__construct($_id, $_name, $_brand, $_category, $_price, $_img);

        $this->type = $_type;
    }
}
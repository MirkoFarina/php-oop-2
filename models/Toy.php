<?php 


class Toy extends Product {
    public $feature;
    public $size;

    /** 
     * @param Number $_id
     * @param String $_name
     * @param Array $_category
     * @param Number $_price
     * @param String $_img url img
     * @param String $_feature
     * @param String $_size
     */
    public function __construct($_id, $_name, $_brand, $_category, $_price, $_img, $_feature, $_size)
    {
        parent::__construct($_id, $_name, $_brand, $_category, $_price, $_img);

        $this->feature = $_feature;
        $this->size = $_size;
    }
}
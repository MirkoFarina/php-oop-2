<?php 
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
     * @param Category $_category
     * @param Number $_price
     * @param String $_img url img
     */
    public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_img)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->category = $_category;
        $this->price = $_price;
        $this->img = $_img;
    }
}
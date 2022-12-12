<?php
class Product {
    public $id;
    public $name;
    public $brand;
    public $category;
    public $price;
    public $is_avaible = true;
    public $img;
    public $full_item_name;

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
        $this->full_item_name = $this->get_full_item_name();
    }

    public function get_full_item_name(){
        return "$this->name $this->brand";
    }
}
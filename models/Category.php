<?php 

class Category {
    public $name;
    public $icon;

    /**
     * @param String $_name
     * @param String $_icon  url img
     */
    public function __construct($_name, $_icon)
    {
        $this->$_name;
        $this->$_icon;
    }
}
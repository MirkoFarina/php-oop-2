<?php 

class Food extends Product {
    public $weight;
    public $ingredients;
    private $size;

    /**
     * @param Number $_id
     * @param String $_name
     * @param Array $_category
     * @param Number $_price
     * @param String $_img url img
     * @param String $_weight
     * @param String $_ingredients
     * @param String $_size Age in month
     */
    public function __construct($_id, $_name, $_brand, $_category, $_price, $_img, $_weight, $_ingredients, $_size)
    {
        parent::__construct($_id, $_name, $_brand, $_category, $_price, $_img);

        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
        $this->setSize($_size);
    }

    public function setSize($_size){
        if(is_numeric($_size)){
            if($_size < 12 ) {
                $this->size = 'Puppy';
            }else {
                $this->size = 'Adult';
            }
        }
    }

    public function getSize() {
        return $this->size;
    }
}
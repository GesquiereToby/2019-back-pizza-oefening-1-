<?php

class Topping{
    public $id;
    public $ingredient;


    public function __construct($parId=-1, $parIngredient =""){
            $this->id = $parId;
            $this->ingredient = $parIngredient;

    }

    

}
?>

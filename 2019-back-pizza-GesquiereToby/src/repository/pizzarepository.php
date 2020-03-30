<?php
require_once dirname(__FILE__) . "/../model/pizza.php";
require_once dirname(__FILE__) . "/../model/topping.php";
require_once dirname(__FILE__) . "/../database/database.php";



class PizzaRepository{
    public static function getAllPizza(){
    $arr = Database::getRows("SELECT id,  omschrijving, kaas, toppingid FROM pizza", null, "Pizza");
    return $arr;
    }
    public static function getPizzaById($parId){
    $item = Database::getSingleRow("SELECT id,  omschrijving, kaas, toppingid FROM pizza WHERE id=?", [$parId], "Pizza");
    return $item;

    }
    public static function getAllToppings(){
    $arr = Database::getRows("SELECT id, ingredient from toppings", null, "Topping");
    return $arr;   
    }
    


    public static function createPizza($parOmschrijving,$parToppingid, $parKaas){
    $int = Database::execute("INSERT INTO pizza(omschrijving, kaas, toppingid) VALUES(?,?,?)", [$parOmschrijving,$parKaas, $parToppingid]);
    return $int;   
    }



    public static function updatePizza($parId, $parOmschrijving, $parKaas, $parToppingid){
    $int = Database::execute("UPDATE pizza SET omschrijving=?, kaas=?, toppingid=? where id=?", [$parOmschrijving, $parKaas, $parToppingid, $parId]);
    return $int;
    }
    public static function deletePizza($parId){
    $int = Database::execute("DELETE FROM pizza WHERE id=?", [ $parId]);
    return $int;
    }
}


?>
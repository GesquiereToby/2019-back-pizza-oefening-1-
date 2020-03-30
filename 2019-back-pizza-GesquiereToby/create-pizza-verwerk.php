<?php
require_once dirname(__FILE__) . "/src/helper/debug.php"; 
require_once dirname(__FILE__) . "/src/repository/pizzarepository.php";
require_once dirname(__FILE__) . "/src/model/pizza.php";

print_r_pre($_POST);
if (isset($_POST["submit"])){
    $kaasje= 0;
    if (isset($_POST["kaas"])){
        $kaasje= 1;
    }else{
        $kaasje= 0;
    }



    $aantalRijen = PizzaRepository::createPizza($_POST["omschrijving"],$_POST["topping"], $kaasje );
    if ($aantalRijen>0){
        //echo "toevoegen gelukt";
        header("location:index.php");
    }else{
        echo "toevoegen mislukt";
    }
}else{
    echo "toevoegen mislukt. (Je kwam niet vanaf het formulier)";
}


?>
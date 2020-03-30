<?php

require_once dirname(__FILE__) . "/src/helper/debug.php"; 
require_once dirname(__FILE__) . "/src/repository/pizzarepository.php"; 

print_r_pre($_POST);

if (isset($_POST["submit"])){
    $kaasje= 0;
    if (isset($_POST["kaas"])){
        $kaasje= 1;
    }else{
        $kaasje= 0;
    }
    $aantalRijen = PizzaRepository::updatePizza($_POST["id"], $_POST["omschrijving"], $kaasje ,$_POST["toppingid"]);
    print_r($aantalRijen);
    if ($aantalRijen>0){
        header("location:index.php");
    }else{
        echo "er zijn geen records geupdated";
    }
}else{
    echo "toevoegen mislukt. (Je kwam niet vanaf het formulier)";
}
?>

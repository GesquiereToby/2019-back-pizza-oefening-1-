<?php
require_once dirname(__FILE__)."/src/helper/debug.php";
require_once dirname(__FILE__)."/src/repository/pizzarepository.php";

if(isset($_GET["id"])){
    $res= PizzaRepository::deletePizza($_GET["id"]);
    if($res >0){
        header("location:index.php");
    }
    else{
        echo "verwijderen mislukt";
    }

}
else{
    echo "error: u gaf geen querystring op.";
}


?>

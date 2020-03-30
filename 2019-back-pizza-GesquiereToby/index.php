<?php
require_once dirname(__FILE__) . "/src/helper/debug.php"; 
require_once dirname(__FILE__) . "/src/repository/pizzarepository.php";
$arrPizzas= PizzaRepository::getAllPizza();
$arrToppings= PizzaRepository::getAllToppings();
print_r_pre($arrPizzas);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/screen.css" />
    <title>Backend - Pizza</title>
  </head>
  <body>
  <h1>Pizza Bestellingen</h1>
    <main class="c-catalog">
    <main>
    <section id="overview" class="container">
        <h1>Overview</h1>

        <table class="table table-striped">
            <thead>
            <tr> 
        <td> id </td>
        <td>Soort</td>
				<td>Topping</td>
				<td>Kaas of niet</td>			
				<td>Bewerk</td>			
            </tr>
            </thead>
            <tbody>
<?php

            // noteer hier je code om de tabel op te vullen
foreach($arrPizzas as $pizza) {
    $tempid = $pizza->id;
    echo"<tr>";
    echo"<td>".$pizza->id."</td>";
    echo"<td>".$pizza->omschrijving."</td>";
    echo"<td>".$pizza->toppingid."</td>";
    echo"<td>".$pizza->GetSoortkaas()."</td>";
    //echo"<td>".$afspraak->contactid."</td>";

    echo "";
    echo "<td><a href='delete-pizza.php?  id=".$tempid."'class='c-btn'>delete</a>  - 
    <a href='update-pizza.php?id=".$tempid."'>update</a> </td>";
    echo "</tr>";}?>
            </tbody>
        </table>

    </section>
</main>
    <section id="overview" class="container">
    <h1>Voeg een nieuwe pizza toe</h1>
    <a href='create-pizza.php' class='c-btn'>voeg een nieuwe pizza toe</a>
      

  </body>
</html>

<?php
require_once dirname(__FILE__) . "/src/helper/debug.php"; 
require_once dirname(__FILE__) . "/src/repository/pizzarepository.php";
 

$arrToppings = PizzaRepository::getAllToppings();
print_r_pre($arrToppings);



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/screen.css" />
  </head>
  <body>
    <h1>Voeg een nieuwe bestelling toe</h1>
    <form class="form" action="create-pizza-verwerk.php" method="post">
      <div class="c-row">
            
        <div class="c-row__label">Naam van de pizza</div>
        <div class="c-row__input">
          <input type="text" id="omschrijving" name="omschrijving" value="omschrijving" />
        </div>
      </div>
      <div class="c-row">
        <div class="c-row__label">optie</div>
        <div class="c-row__input">
        <input type="checkbox" id="kaas" name="kaas" value="kaas">
        <label for="kaas"> met extra kaas</label><br>
        </div>
      </div>
      <div class="c-row">
        <div class="c-row__label">optie</div>
        <div class="c-row__input">
         <div class="c-row">

            <div class="c-row__label">toppings</div>

            <div class="c-row__input" for="type">

             <select name="topping" id="topping">

                <?php foreach($arrToppings as $top){

                    echo "<option value='$top->id'  >$top->ingredient</option>";

                }?>

             </select>

            </div>

          </div>
            
        </div>
      </div>
      <input type="submit" name="submit" class="btn btn-default" value="Create"></input>
      <!-- enz.... -->
    </form>
  </body>
</html>
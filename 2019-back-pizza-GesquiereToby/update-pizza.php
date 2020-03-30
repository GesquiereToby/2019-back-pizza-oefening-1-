<?php

require_once dirname(__FILE__)."/src/helper/debug.php";
require_once dirname(__FILE__)."/src/repository/pizzarepository.php";  
$pizza = PizzaRepository::getPizzaByID($_GET["id"]);

print_r_pre($pizza);

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
    <section id="overview" class="container">
        <h1>Update een pizza</h1>
        <form class="form" action="update-pizza-verwerk.php" method="post">
            <div class="form-group">
                <label for="titel">id</label>
                <input type="text" class="form-control" name="id" id="id" readonly value="<?php echo $pizza->id?>">
            </div>
            
            <div class="form-group">
                <label for="omschrijving">Omschrijving</label>
                <input type="text" class="form-control" name="omschrijving" id="omschrijving " value="<?php echo $pizza->omschrijving?>" placeholder="">
            </div>
            
            <div class="c-row__label">optie</div>
            <div class="c-row__input">
                <input type="checkbox" id="kaas" name="kaas" value="kaas">
                <label for="kaas"> met extra kaas</label><br>
            </div>
            
            <div class="form-group">
                <label for="toppingid">topping</label>
                <select class="form-control" name="toppingid" id="toppingid">
                    <option value="1" <?php  echo ($pizza->toppingid) ?> >vis</option>
                    <option value="2"  <?php  echo ($pizza->toppingid) ?>>champignons</option>
                    <option value="3"  <?php echo ($pizza->toppingid) ?>>pepperoni</option>
                </select>
            </div>
            <input type="submit" name="submit" class="btn btn-default" value="Update"></input>			
        </div> 
        </form>
    </section>
  </body>
</html>
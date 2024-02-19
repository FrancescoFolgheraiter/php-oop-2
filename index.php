<?php
require_once __DIR__.'/classes/Products.php';
require_once __DIR__.'/classes/Food.php';
require_once __DIR__.'/classes/Toys.php';
require_once __DIR__.'/classes/DogBed.php';

$allProduct = [];

$pippo = new Food("prova",5,"dog");
var_dump($pippo);
$allProduct[] = $pippo;
var_dump($allProduct);
$pluto = new Toys("Mangia gatti",30,"dog",10,"dsajidsajdsai","http://prova.com",5,"salciccia",true);
var_dump($pluto);
$allProduct[] = $pluto;
var_dump($allProduct);
$paperino= new DogBed("",30,"",10,"","",5,"",30);
var_dump($paperino);
$allProduct[] = $paperino;
var_dump($allProduct);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!--importazione Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <h1 class="text-center">
                Zoo114
            </h1>
        </header>
        <main>
            <div class="container">
                <ul>
                    <?php
                    foreach ($allProduct as $key => $product) {
                    ?>
                    <li>
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                <?php
                                echo $product->name
                                ?>
                                </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </main>
    </body>
</html>
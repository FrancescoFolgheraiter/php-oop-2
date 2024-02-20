<?php
require_once __DIR__.'/classes/Products.php';
require_once __DIR__.'/classes/Food.php';
require_once __DIR__.'/classes/Toys.php';
require_once __DIR__.'/classes/DogBed.php';
require_once __DIR__.'/classes/Category.php';
//inizializzazione oggetti cane e gatto
$dog = new Category("dog");
$cat = new Category("cat");

try {

    $allProduct = [];

    $mangime = new Food("Royal Canin Labrador",62,$dog ,10,"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, vero!","https://shop-cdn-m.mediazs.com/bilder/0/400/61151_pla_royalcanin_adulthund_labradorretriever_0.jpg",5,"12,00kg","12/10/2025","gatti");

    $allProduct[] = $mangime;

    $mangiaGatti = new Toys("Maiale di gomma",30,$dog ,10,"dsajidsajdsai","https://shop-cdn-m.mediazs.com/bilder/4/400/60577_pla_latexschwein_small_fg_5570_4.jpg",5,"salciccia",true);

    $allProduct[] = $mangiaGatti;

    $paperino= new DogBed("Cuccia per cani",30,$dog ,1,"Cuccia per cani","https://shop-cdn-m.mediazs.com/bilder/5/400/56823_PLA_Kuschelkissen_fuer_Hundeboxen_L64_FG__1__5.jpg", 4,"Ipoallergenico",30);

    $allProduct[] = $paperino;
}
catch (Exception $e) {
    echo "Errore: ".$e->getMessage();
}
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
                Animals 114
            </h1>
        </header>
        <main>
            <div class="container">
                <ul class="row list-unstyled">
                    <?php
                    foreach ($allProduct as $key => $product) {
                    ?>
                    <div class="col-4">
                        <li class="h-100">
                            <div class="card h-100" style="width: 18rem;">
                                <img src=<?php echo $product->image; ?> class="card-img-top" alt=<?php echo $product->getName(); ?>>
                                <div class="card-body">
                                    <h5 class="card-title">
                                    <?php
                                    echo $product->getName();
                                    ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php
                                        echo $product->description;
                                        ?>
                                        <hr>
                                        <?php
                                        echo "Tipo: ".get_class($product);
                                        ?>
                                    </p>
                                    <div class="d-flex justify-content-between ">
                                        <div>
                                            <?php
                                            echo "€".$product->price;
                                            ?>
                                        </div>
                                        <div>
                                            <?php
                                            echo "Categoria: ".$product->category->getName();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </main>
    </body>
</html>
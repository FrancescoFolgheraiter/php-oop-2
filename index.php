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
</head>
<body>
    
</body>
</html>
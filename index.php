<?php
require_once __DIR__.'/classes/Products.php';
require_once __DIR__.'/classes/Food.php';
require_once __DIR__.'/classes/Toys.php';

$pippo = new Food("prova",5,"dog");
var_dump($pippo);

$pluto = new Toys("Mangia gatti",30,"dog",10,"dsajidsajdsai","http://prova.com",5,"salciccia",true);
var_dump($pluto);
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
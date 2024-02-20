<?php
require_once __DIR__.'/Products.php';
class Toys extends Product{
    public $material;
    public $outdoor;

    function __construct( $name, int $price, string $category, int $stock = 0, string $description = "",string $image = "immagine non trovata", int $raiting = 0, string $material ="unknow", bool $outdoor = false){
        parent::__construct( $name,  $price,  $category,  $stock ,  $description , $image ,  $raiting );
        $this->material = $material;
        $this->outdoor= $outdoor;
    }
}
?>
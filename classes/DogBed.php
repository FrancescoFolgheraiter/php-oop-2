<?php
require_once __DIR__.'/Products.php';
class DogBed extends Product{
    public $material;
    public $size;

    function __construct(string $name, int $price, string $category, int $stock = 0, string $description = "",string $image = "immagine non trovata", int $raiting = 0, string $material ="unknow", int $size = 0){
        parent::__construct( $name,  $price,  $category,  $stock ,  $description , $image ,  $raiting );
        $this->material = $material;
        $this->size= $size;
    }
}
?>
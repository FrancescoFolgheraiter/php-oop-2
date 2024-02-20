<?php
require_once __DIR__.'/Products.php';
class Food extends Product{
    public $expire;
    public $flavor;
    public $quantity;

    function __construct( $name, int $price, Category $category, int $stock = 0, string $description = "",string $image = "immagine non trovata", int $raiting = 0, string $quantity = "kg", string $expire ="00/00/0000", string $flavor = ""){
        parent::__construct( $name,  $price,  $category,  $stock ,  $description , $image ,  $raiting );
        $this->expire = $expire;
        $this->flavor= $flavor;
        $this->quantity = $quantity;
    }
}
?>
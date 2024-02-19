<?php
require_once __DIR__.'/Products.php';
class Food extends Product{
    public $expire;
    public $flavor;
    public $quantity;

    function __construct(string $name, int $price, string $category, int $stock = 0, string $description = "",string $image = "immagine non trovata", int $raiting = 0, int $quantity = 0, string $expire ="00/00/0000", string $flavor = ""){
        parent::__construct( $name,  $price,  $category,  $stock ,  $description , $image ,  $raiting );
        $this->expire = $expire;
        $this->flavor= $flavor;
        $this->quantity = $quantity;
    }
}
?>
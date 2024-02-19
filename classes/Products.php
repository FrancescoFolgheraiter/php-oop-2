<?php
class Product{
   public $name;
   public $image;
   public $price;
   public $category;
   public $stock;
   public $description;
   public $raiting;

   function __construct(string $name, int $price, string $category, int $stock = 0, string $description = "",string $image = "immagine non trovata", int $raiting = 0){
    $this->name = $name;
    $this->image = $image;
    $this->price = $price;
    $this->category = $category;
    $this->stock = $stock;
    $this->description = $description;
    $this->raiting = $raiting ;
   }
}
?>
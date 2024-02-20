<?php

require_once __DIR__.'/../traits/HasName.php';
require_once __DIR__.'/Category.php';
class Product{
   use HasName;

   public $image;
   public $price;
   public $category;
   public $stock;
   public $description;
   public $raiting;

   function __construct($name, int $price, Category $category, int $stock = 0, string $description = "",string $image = "immagine non trovata", int $raiting = 0){
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
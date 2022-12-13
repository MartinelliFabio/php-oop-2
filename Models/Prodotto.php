<?php
include_once __DIR__ . '/Categoria.php';

class Prodotto {

    protected String $title;
    protected String $image;
    protected Float $price;
    public Categoria $category;
    private Bool $available;

    function __construct(String $_title, String $_image = null, Float $_price, Categoria $_category) {
        $this->setTitle($_title);
        $this->setImage($_image);
        $this->setPrice($_price);
        $this->category = $_category;
        $this->setAvailable();
    }

    // Getter and Setter of title
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($_title) {
        if(strlen($_title)) {
            $this->title = $_title;
        } else {
            $this->title = null; 
        }
        return $this;
    }

    // Getter and Setter of image
    public function getImage() {
        return $this->image;
    }

    public function setImage($_image) {
        if(strlen($_image)) {
            $this->image = $_image;
        } else {
            $this->image = 'default.png'; 
        }
        return $this;
    }

    // Getter and Setter of price
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($_price) {
        if($_price > 0) {
            $this->price = $_price;
        } else {
            $this->price = 0; 
        }
        return $this;
    }


    public function getAvailable() {
        return $this->available;
    }

    private function setAvailable(){
        if($this->price == 0) {
            $this->available = false;
        } else {
            $this->available = true;
        }
        return $this;
    }
}
  
?>
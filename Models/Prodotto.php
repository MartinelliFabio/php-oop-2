<?php
include_once __DIR__ . '/Categoria.php';

class Prodotto {

    private String $title;
    private String $image;
    private Float $price;
    public Categoria $category;

    function __construct(String $_title, String $_image, Float $_price, Categoria $_category) {
        $this->setTitle($_title);
        $this->setImage($_image);
        $this->setPrice($_price);
        $this->category = $_category;
    }

    // Getter and Setter of title
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($_title) {
        $this->title = $_title;
        return $this;
    }

    // Getter and Setter of image
    public function getImage() {
        return $this->image;
    }

    public function setImage($_image) {
        $this->image = $_image;
        return $this;
    }

    // Getter and Setter of price
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($_price) {
        $this->price = $_price;
        return $this;
    }
}
  
?>
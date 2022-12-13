<?php
class Cibo extends Prodotto {
    private String $expirationDate;
    private Int $weight;
    private Array $ingredients;

    function __construct(String $_title, String $_image, Float $_price, Categoria $_category, String $_expirationDate, Int $_weight, Array $_ingredients){
        parent::__construct($_title, $_image, $_price, $_category);
        $this->setExpirationDate($_expirationDate);
        $this->setWeight($_weight);
        $this->setIngredients($_ingredients);
    }


    // Getter and Setter of expirationDate
    public function getExpirationDate(){
        return $this->expirationDate;
    }

    public function setExpirationDate($_expirationDate){
        $this->expirationDate = $_expirationDate;
        return $this;
    }

    // Getter and Setter of weight
    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($_weight){
        $this->weight = $_weight;
        return $this;
    }

    // Getter and Setter of ingredients
    public function getIngredients(){
        return $this->ingredients;
    }

    public function setIngredients($_ingredients){
        $this->ingredients = $_ingredients;
        return $this;
    }
}
?>
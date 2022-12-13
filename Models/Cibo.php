<?php
include_once __DIR__ . '/Prodotto.php';
class Cibo extends Prodotto {
    private Int|null $weight;
    private Array $ingredients;
    private String $expirationDate;

    function __construct(String $_title, String $_image, Float $_price, Categoria $_category, Int $_weight, Array $_ingredients, String $_expirationDate = "yyyy-mm-dd"){
        parent::__construct($_title, $_image, $_price, $_category);
        $this->setWeight($_weight);
        $this->setIngredients($_ingredients);
        $this->setExpirationDate($_expirationDate);
    }

    // Getter and Setter of weight
    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($_weight){
        if($_weight > 0) {
            $this->weight = $_weight;
        } else {
            $this->weight = null; 
        }
        return $this;
    }

    // Getter and Setter of ingredients
    public function getIngredients(){
        return $this->ingredients;
    }

    public function setIngredients($_ingredients){
        if(count($_ingredients)) {
            $this->ingredients = $_ingredients;
        } else {
            $this->ingredients = ["Not Available"]; 
        }
        return $this;
    }

    // Getter and Setter of expirationDate
    public function getExpirationDate(){
        return $this->expirationDate;
    }

    public function setExpirationDate($_expirationDate){
        $dateNow = new DateTime('now');
        $dateExpiration = new DateTime($_expirationDate);
        if($dateNow <= $dateExpiration) {
            $this->expirationDate = $_expirationDate;
        } else {
            $this->expirationDate = 'Scaduto';
        }
        return $this;
    }
}
?>
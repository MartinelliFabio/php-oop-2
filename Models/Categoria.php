<?php
  class Categoria {
    private String $species;

    function __construct(String $_species) {
        $this->setSpecies($_species);
    }

    // Getter and Setter of species
    public function getSpecies() {
        return $this->species;
    }

    public function setSpecies($_species) {
        if(strlen($_species)) {
            $this->species = $_species;
        } else {
            $this->species = 'Alien'; 
        }
        return $this;
    }
  }

?>
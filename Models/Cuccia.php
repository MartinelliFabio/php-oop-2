<?php
include_once __DIR__ . '/Prodotto.php';

  class Cuccia extends Prodotto {
    private String $where;
    private String $size;
    private Array $materials;

    function __construct(String $_title, String $_image, Float $_price, Categoria $_category, String $_where, String $_size, Array $_materials) {
        parent::__construct($_title, $_image, $_price, $_category);
        $this->setWhere($_where);
        $this->setSize($_size);
        $this->setMaterials($_materials);
    }


    // Getter and Setter of where
    public function getWhere()
    {
        return $this->where;
    }

    public function setWhere($where)
    {
        $this->where = $where;
        return $this;
    }

    // Getter and Setter of materials
    public function getMaterials()
    {
        return $this->materials;
    }

    public function setMaterials($materials)
    {
        $this->materials = $materials;
        return $this;
    }

    // Getter and Setter of size
    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
  }
?>
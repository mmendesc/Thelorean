<?php
 class Category{
	public $idCategory;
	public $name;

	function __construct($name){
		$this->name=$name;
    }

    public function getIdCategory()
    {
        return $this->idCategory;
    }

    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}

?>
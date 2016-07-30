<?php

 class History{
	public $idHistory;
	public $name;
	public $prologue;

	function __construct($name,$prologue){
		$this->name=$name;
		$this->prologue=$prologue;
	}


    /**
     * Gets the value of idHistory.
     *
     * @return mixed
     */
    public function getIdHistory()
    {
        return $this->idHistory;
    }

    /**
     * Sets the value of idHistory.
     *
     * @param mixed $idHistory the id history
     *
     * @return self
     */
    public function setIdHistory($idHistory)
    {
        $this->idHistory = $idHistory;

        return $this;
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of prologue.
     *
     * @return mixed
     */
    public function getPrologue()
    {
        return $this->prologue;
    }

    /**
     * Sets the value of prologue.
     *
     * @param mixed $prologue the prologue
     *
     * @return self
     */
    public function setPrologue($prologue)
    {
        $this->prologue = $prologue;

        return $this;
    }
}
?>
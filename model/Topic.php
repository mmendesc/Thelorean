<?php
 class Topic{
    public $idTopic;
	public $idHistory;
	public $title;
    public $content;

	function __construct($idHistory,$title, $content){
		$this->idHistory=$idHistory;
		$this->title=$title;
        $this->content=$content;
    }

    public function getIdTopic()
    {
        return $this->idTopic;
    }

    public function setIdTopic($idTopic)
    {
        $this->idTopic = $idTopic;

        return $this;
    }

    public function getIdHistory()
    {
        return $this->idHistory;
    }

    public function setIdHistory($idHistory)
    {
        $this->idHistory = $idHistory;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}

?>
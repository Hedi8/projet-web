<?php
class abonement
{
	private $id ;
	private $nom ;
	private $prenom ;
    private $age ;
    private $num ;
    private $type ;
    private $startdate;
    
    function __construct($id,$nom,$prenom,$age,$num,$type,$startdate)
    {
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->age=$age;
		$this->num=$num;
        $this->type=$type;
        $this->startdate=$startdate;
	}
	function getId() 
	
	{
		return $this->id ;
	}
	function getNom()
	{
		return  $this->nom ;
	}
	function getPrenom()
	{
		return $this->prenom ;
	}
    function getAge()
	{
		return $this->age ;
	}
    function getNum()
	{
		return $this->num ;
	}
    function getType()
	{
		return $this->type ;
	}
    function getStartdate()
	{
		return $this->startdate ;
	}
	function setId($id)
	{
		$this->id=$id ;
	}
	function setNom($nom)
	{
		 $this->nom=$nom ;
	}
	function setPrenom($prenom)
	{
		$this->prenom=$prenom ;
	}
    function setAge($age)
	{
		 $this->age=$age ;
	}
    function setNum($num)
	{
		 $this->num=$num ;
	}
    function setType($type)
	{
		 $this->type=$type ;
	}
    function setStartdate($startdate)
	{
		$this->startdate=$startdate ;
	}
	
}
?>
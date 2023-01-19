<?php
class Ouvrier extends Employee
{
    private $tenue;
     
    public function __construct($matricule,$nom,$prenom,$addrese,$fonction,$tenue)
    {
        parent::__construct($matricule,$nom,$prenom,$addrese,$fonction);
        $this->tenue =$tenue;
    }
    public function getTenue()
    {
        return $this -> $tenue;
    }
    public function setTenue($tenue)
    {
        $this->tenue =$tenue;
    }
    public function __toString()
    {
        return "Matricule : ".$this->matricule. "<br>Nom : ".$this->nom. "<br>Prenom : ".$this->prenom. 
        "<br>Addrese : ".$this->addrese. "<br>Fonction : ".$this->fonction. "<br>Tenue : ".$this->tenue;
    }

}
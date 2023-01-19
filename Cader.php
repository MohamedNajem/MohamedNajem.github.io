<?php
class Cader extends Employee
{
    private $vehicule;

    public function __construct($matricule,$nom,$prenom,$addrese,$fonction,$vehicule)
    {
        parent::__construct($matricule,$nom,$prenom,$addrese,$fonction);
        $this->vehicule=$vehicule;
    }
    public function getVehicule()
    {
        return $this->vehicule;
    }
    public function setVehicule($vehicule)
    {
        $this->vehicule=$vehicule;
    }
    public function __toString()
    {
        return "Matricule : ".$this->matricule. "<br>Nom : ".$this->nom. "<br>Prenom : ".$this->prenom. 
        "<br>Addrese : ".$this->addrese. "<br>Fonction : ".$this->fonction. "<br> vehicule : ".$this->vehicule;
    }
}

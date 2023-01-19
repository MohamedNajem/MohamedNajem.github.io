<?php
class Employee
{
    protected $matricule;
    protected $nom;
    protected $prenom;
    protected $addrese;
    protected $fonction;

    public function __construct($matricule,$nom,$prenom,$addrese,$fonction){
        $this->matricule=$matricule;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->addrese=$addrese;
        $this->fonction=$fonction;
    }
    public function getMatricule()
    {
        return $this->matricule;
    }
    public function setMarticule($matricule)
    {
        $this->matricule =$matricule;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom =$nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom =$prenom;
    }
    public function getAddrese()
    {
        return $this->addrese;
    }
    public function setAddrese($addrese)
    {
        $this->addrese =$addrese;
    }
    public function getFonction()
    {
        return $this->fonction;
    }
    public function setFonction($fonction)
    {
        $this->fonction=$fonction;
    }
    public function __toString()
    {
        return "Matricule : ".$this->matricule. "<br>Nom : ".$this->nom. "<br>Prenom : ".$this->prenom. 
        "<br>Addrese : ".$this->addrese. "<br>Fonction : ".$this->fonction;
    }
    

}

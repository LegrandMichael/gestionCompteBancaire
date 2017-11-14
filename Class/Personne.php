<?php

class Personne {
    
    protected $id;
    protected $nom;
    protected $prenom;

    protected static $prochainId = 1;

    public function __construct($prenom,$nom){
        $this->id=self::$prochainId++;
        $this->nom=$nom;
        $this->prenom=$prenom;
    }

    public function getNom(){
        echo $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getId(){
        echo $this->id;
    }

    public function __toString(){
        return "Personne Id: " . $this->id. "Prénom:".$this->prenom."Nom ". $this->nom;
    }
}
?>
<?php

class Operation {

    private $montant;
    private $sens;
    private $commentaire;

    public function __construct($montant,$sens,$commentaire){
        $this->setSens($sens);
        $this->setMontant($montant);
        $this->setCommentaire($commentaire);
    }

    public function setMontant($montant){
        $this->montant=$montant;
    }

    public function getMontant(){
        return $this->montant;
    }

    public function setSens($sens){
        $this->sens=$sens;
    }

    public function getSens(){
        return $this->sens;
    }

    public function setCommentaire($commentaire){
        $this->commentaire=$commentaire;
    }

    public function getCommentaire(){
        return $this->commentaire;
    }


}
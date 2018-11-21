<?php

class Addition{
    private $nb;
    public function __construct($nb){
        $this->nb=$nb;
    }
    public function add($x,Show $y){
        $this->nb+=$x;
        //collaboration entre objets
        $y->affiche($this->nb);       
    }
    public function soustruct($r){
        $this->nb-=$r;
        //retourne le mm objet
        return $this;
    }
    
}
class Show{
    public function affiche($nb){
        echo "<br/>$nb<br/>";
    }
}
?>
<?php
//class abstraite
abstract class Person{
    protected $nom;
    protected $race;
    protected $age;
    //abstract protected function __construct();
    //method abstrait
    abstract protected function getinfo();
    abstract protected function affiche();
}
class Etudiant extends Person{
    private $promotion;
    private $niveau;
    
    function __construct($nom,$race,$age,$promotion,$niveau){
        $this->nom=$nom;
        $this->race=$race;
        $this->age=$age;
        $this->promotion=$promotion;
        $this->niveau=$niveau;
    }
    
    public function getinfo(){
        $this::affiche();
    }
    public function affiche(){
        echo "<h2>L'Etudiant $this->nom est en $this->promotion</h2>";
    }
}
?>
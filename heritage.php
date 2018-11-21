<?php

    class Valeur{
        protected $nom;
        protected $prix;
        function __construct($nom,$prix){
            $this->nom=$nom;
            $this->prix=$prix;
        }
        function getinfo(){
            $info="<h4>Le prix de $this->nom est de $this->prix</h4><br/>";
            return $info;
        }
    }
     //class derivee
     class Action extends Valeur{
        public $bourse;
        public function __construct($nom,$prix,$bourse){
            parent::__construct($nom,$prix);//utilise le constructeur du parrent
            $this->bourse=$bourse;
        }
	//redefinition
        public function getinfo(){
            $info="<h3>Action $this->nom cotee a la bourse $this->bourse</h3>";
            $info.=parent::getinfo();
            return $info;
        }
    }
     //deuxieme class derivee
     class Emprunt extends Valeur{
        public $taux;
        public function __construct($nom,$prix,$taux){
            parent::__construct($nom,$prix);
            $this->taux=$taux;
        }
        public function getinfo(){
            $info="<h2>Les genies du $this->taux et du $this->nom</h2>";
            $info.=parent::getinfo();//appel de la methode ecrite dans parent et concatenation
            return $info;
        }

    }
    $act1=new Action('Elisee','20$','Ndola');
    echo $act1->getinfo();
    $emprunt=new Emprunt('Mizkael','20$','5');
    echo $emprunt->getinfo();
?>
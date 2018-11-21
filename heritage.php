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
?>
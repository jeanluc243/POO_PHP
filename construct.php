<?php

//-------------Class avec constructeur----------------------

    class Person
    {
        private $nom;
        private $email;
        private $tel;
        private $nb_instance=0;

        public function __construct($n,$email,$tel)
        {
            $this->nom=$n;
            $this->email=$email;
            $this->tel=$tel;
            $this->nb_instance++;
        }
        
        public function affiche(){
            echo "$this->nom<br/>";
            echo "$this->email<br/>";
            echo "$this->tel<br/>";
        }
        
        public function __destruct(){
            echo "<br/>La personne $this->nom est effacee<br/>";
        }
    }
?>

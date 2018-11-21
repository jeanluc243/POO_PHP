<?php

//-------------Class avec constructeur----------------------

    class Person{
        private $nom;
        private $email;
        private $tel;
        private $nb_instance=0;

        public function __construct($n,$email,$tel){
            $this->nom=$n;
            $this->email=$email;
            $this->tel=$tel;
            $this->nb_instance++;
        }
?>
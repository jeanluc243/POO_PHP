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
?>
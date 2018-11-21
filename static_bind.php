<?php

class Pere{
    static public function affiche($n){
        echo "<h1>Je suis le pere $n";
    }
    static public function info($nom){
        static::affiche($nom);
    }    
}
?>
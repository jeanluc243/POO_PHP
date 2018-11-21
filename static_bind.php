<?php

class Pere{
    static public function affiche($n){
        echo "<h1>Je suis le pere $n";
    }
    static public function info($nom){
        static::affiche($nom);
    }    
}
//**************************************
class Fils extends Pere{
    static public function affiche($n){
        echo "Je suis le fils $n";
    }
}
Pere::info("Elisee");
?>
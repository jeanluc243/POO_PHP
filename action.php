<?php
//---------poo---------------------------------
class Action
{

    const CITY="LSHI";
    
    public $nom;    
    public $address;
    public $heurdeb;
    public $heurfin;    
    
    public function info()
    {
        echo "Info par rapport au visite";
        $now=getdate();
        $hour=$now['hours'];
        $jour=$now['wday'];
        
        if(($hour>=$this->heurdeb) && ($hour<=$this->heurfin))
        {
            echo "<br/>L'hopital est ouvert!";
        }
        else
        {
            echo "<br/>L'hopital est ferme";
            echo '<br/>'.$hour.'<br/>'.$jour;
        }
    }
}

$maclass="Action";
$hospital=new $maclass();
$hospital->nom="Sendwe";
$hospital->address="123.Av sendwe Q.makomeno C.L'shi";
$hospital->heurdeb=21;
$hospital->heurfin=24;
$hospital->info();echo '<br/>';
var_dump($hospital);
$str=gettype($hospital);

if(!($hospital instanceof $maclass))
{
    echo '<br/>Ok';
}

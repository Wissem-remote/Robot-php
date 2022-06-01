<?php

class Robot{
    
    private $name;
    public function __construct()
    {
        $this->name= $this->toAlpha(rand(1,9)).$this->toAlpha(rand(1,9))."-".rand(1000,9999);
    }

    public function toAlpha($num)
    {
        return chr(substr("000".($num+65),-3));
    }
    public function bonus_0()
    {
        echo "Salut, humain. Je suis ".$this->name."\n";
    }
    public function Check($num)
    {
        if($num % 2 == 0){
            return "Paire";
        }else {
            return "Impaire";
        }
    }
    public function bonus_1()
    {
        echo "Nous sommes le ".date('d m Y').", il est ".date('H:i:s')."\n";
    }
    public function bonus_2()
    {
        $num = rand(1,9);
        echo "J'ai choisi le nombre ".$num." C'est un nombre ".$this->Check($num)."\n";
    }
  
    public function bonus_3()
    {
        $name = implode(array_reverse(str_split($this->name)));
        echo "Mon nom à l'envers s'écrit ".$name.". Ah. Ah. Ah. \n";
    }
    public function bonus_4($nb=3)
    {
        if($nb >= 3)
        {
            $check = 1;
            for($i=0; $i < $nb; $i++)
            {
                if($check == 3)
                {
                echo "Extermination ! Extermination ! \n";
                $check=1;
                }
                else
                {
                    echo "Vous voulez un café ? \n";
                    $check++;
                }
            }
        }
        else 
        {
            echo "veuiller metre un chiffre plus que 3 \n";
        }
    }
    public function bonus_5()
    {
        $nb = rand(1, 10);
        echo "la valeur est $nb le robot a trouver en boucle: ".$this->search($nb,1,10)."\n";
    }
    public function bonus_6()
    {
        $nb = rand(1, 10);
        echo "la valeur est $nb le robot a trouver en dichotomique : ".$this->dichotomique(1,10,$nb)."\n";
    }

    public function search($nb, $deb , $fin)
    {
        for($i= $deb; $i < $fin; $i++){
            if( $i == $nb) return $i;
        }
    }

    public function dichotomique($deb,$fin,$nb)
    {
        if($deb <= $fin){
            $milieu =  intval(($deb+$fin)/2);
            if( $milieu == $nb) return $milieu;
        elseif($milieu < $nb) return $this->dichotomique( $milieu+1, $fin, $nb);
        elseif( $milieu > $nb) return $this->dichotomique($deb, $milieu-1,$nb);
        else return "exo".$milieu;
        }
        
    }
    
}

$object = new Robot;

$object->bonus_0();
$object->bonus_1();
$object->bonus_2();
$object->bonus_3();
$object->bonus_4();
$object->bonus_5();
$object->bonus_6();






<?php 

class Player {
    var $namep=[];
    public $blood =[];
    public $mana=[];

    function setNamePlayer($n){
        $this->namep[] = $n;
        $this->mana[] = 40;
        $this->blood[] = 100;
    }
    function getNamePlayer(){
        foreach ($this->namep as $nama)
        echo "-".$nama." #\n";
    }
    function detGetNamePlayer($k){
      return $this->namep[$k];
    }
    function detGetManaPlayer($k){
        return $this->mana[$k];
    }
    function detGetBloodPlayer($k){
        return $this->blood[$k];
    }
    function jumPlayer(){
        $jmlPL=count($this->namep);
        return $jmlPL;
    }
    
}
$pl = new Player;
$input="";

function displayUtama(){
    echo "#=================================#\n";
    echo "# Welcome to the Battle Arena#\n";
    echo "#---------------------------------#\n";
    echo "#Description: #\n";
    echo "# 1. Type new to create a character #\n";
    echo "# 2. Type start to begin the fight #\n";
    echo "#---------------------------------#\n";
    echo "# Curret Player: #\n";
    echo "# * max player 2 #\n";
    echo "#---------------------------------#\n";
    echo "Type here : ";fscanf(STDIN,"%s\n", $input);
    return $input;
}     
function tambahPlayer (){
    echo "#=================================#\n";
    echo "# Welcome to the Battle Arena#\n";
    echo "#---------------------------------#\n";
    echo "#Description: #\n";
    echo "# 1. Type new to create a character #\n";
    echo "# 2. Type start to begin the fight #\n";
    echo "#---------------------------------#\n";

}
function arena() {
    echo "#=================================#\n";
    echo "# Welcome to the Battle Arena#\n";
    echo "#---------------------------------#\n";
    echo "Battle Start :\n";  
}
while($input!=="exit")
{
    $input=displayUtama();
    if($input=="new"){
        tambahPlayer();
        echo "# -";$pl->getNamePlayer();
        echo "# * max player 2 #\n";
        echo "#---------------------------------#\n";
        echo "Put Player Name : ";fscanf(STDIN,"%s\n", $input);  
        $pl->setNamePlayer($input);  
        }elseif($input=="start"){
        $j=$pl->jumPlayer();
        if($j=2){
            $kon=0;
            $mana = $pl->detGetManaPlayer(0);
            $darah = $pl->detGetBloodPlayer(1);
            $mana2 = $pl->detGetManaPlayer(1);
            $darah2 = $pl->detGetBloodPlayer(0);
            arena();
            while($kon==0){
            echo "who will attack : ";fscanf(STDIN,"%s\n", $input);
            if ($input==$pl->detGetNamePlayer(0)){
                echo "who will defend : ".$pl->detGetNamePlayer(1);
            }elseif($input==$pl->detGetNamePlayer(1)){
                echo "who will defend : ".$pl->detGetNamePlayer(0);
            }
            echo "\n";
            echo "\n";
            if($input==$pl->detGetNamePlayer(0)){
                $mana -= 10;
                $darah -= 25; 
                
            }elseif($input==$pl->detGetNamePlayer(1)){
                $mana2 -= 10;
                $darah2 -= 25;
                
            }
                echo $pl->detGetNamePlayer(0)." mana = ".$mana." Blood = ".$darah2."\n";
                echo $pl->detGetNamePlayer(1)." mana = ".$mana2." Blood = ".$darah."\n";
                if($darah==0){
                    echo $pl->detGetNamePlayer(0)." WIN!!\n";;
                    echo $pl->detGetNamePlayer(1)." game over!!";
                    $kon=1;
                    $input="exit";
                }elseif($darah2==0){
                    echo $pl->detGetNamePlayer(1)." WIN!!";
                    echo $pl->detGetNamePlayer(0)." game over!!";
                    $kon=1;
                    $input="exit";
                }
            }
        }   
    } 
}


//echo "nama player : ";$pl->getNamePlayer();



?>
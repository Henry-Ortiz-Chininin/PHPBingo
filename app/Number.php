<?php

namespace App;

class Number
{
    public $Cypher;
    public $Column;

    function __construct(){
        $this->Cypher=0;
        $this->Column="";
    }

    public function setNumber($pCypher){
        $this->Cypher=$pCypher;
        if($pCypher<16)
            $this->Column=COLUMN_B;
        else if($pCypher<31)
            $this->Column=COLUMN_I;
        else if($pCypher<46)
            $this->Column=COLUMN_N;
        else if($pCypher<61)
            $this->Column=COLUMN_G;
        else if($pCypher<76)
            $this->Column=COLUMN_O;

    }


    public function getNumber($pMin, $pMax){
        $number = rand($pMin, $pMax);
        return $number;
    }

}
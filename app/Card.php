<?php

namespace App;

class Card
{
    public $Code;
    public $Columns;
    
    function __construct()
	{
		$this->Code="";
        $this->Columns=[];
	}

    function BuildColumns(){
        //GET CONSTANTS
        $Constants = get_defined_constants();

        $header = $Constants['_COLUMNS'];

        foreach($header as $col){
            $column = array($col);
            $params = $Constants['_' . $col];
            $min = $params[0];
            $max = $params[1];
            $len = $params[2];
            $hasFree = $params[3];
            
            do{
                $objNumber = new Number();
                $number = $objNumber->getNumber($min, $max);
                if(!array_search($number,$column)){
                    array_push($column, $number);
                }
                if($hasFree && count($column)==3)
                {
                    array_push($column, "X");
                }

            }while(count($column)<=$len); 
            array_push($this->Columns, $column);
        }

    }

}
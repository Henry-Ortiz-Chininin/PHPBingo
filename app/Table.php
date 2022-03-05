<?php

namespace App;

class Table
{

    public $Numbers;

    function __construct()
	{
		$this->Numbers=array();
	}

    public function BuildTable($called)
    {
        $Constants = get_defined_constants();

        $header = $Constants['_COLUMNS'];

        foreach($header as $col){
            array_push($this->Numbers, $col); 
            $this->Numbers[$col]=array();
        }

        $number = new Number();
        foreach($called as $currentNumber){
            $number->setNumber($currentNumber);
            array_push( $this->Numbers[$number->Column],$currentNumber);
        }
        
    }

}
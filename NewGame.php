<?php
session_start();
session_unset();

include "Config.php";
include "app/Number.php";

$numbers = array();
$Constants = get_defined_constants();

$min = $Constants["_LIMITS"]["min"];
$max = $Constants["_LIMITS"]["max"];
$objNumber = new App\Number();

do{
    $number =  $objNumber->getNumber($min, $max);
    if(!array_search($number,$numbers)){
        array_push($numbers, $number);
    }
}while(count($numbers)<=$max);


$_SESSION["NUMBERS_AVAILABLE"]=$numbers;
$_SESSION["NUMBERS_CALLED"]=array();

?>
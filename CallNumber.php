<?php
session_start();

include "Config.php";

include "app/Number.php";

if(!isset($_SESSION["NUMBERS_AVAILABLE"])){
    echo "Go to Newgame.php";
}

$availableNumbers = $_SESSION["NUMBERS_AVAILABLE"];
$calledNumbers = $_SESSION["NUMBERS_CALLED"];

$Constants = get_defined_constants();

if(count($availableNumbers)==count($calledNumbers)){
    echo("There is not left numbers");
}

$currentIndex = count($calledNumbers);
$currentNumber = $availableNumbers[$currentIndex];
array_push($calledNumbers, $currentNumber);

$_SESSION["NUMBERS_CALLED"] = $calledNumbers;

$number = new App\Number();
$number->setNumber($currentNumber);

echo("<h1>" . $number->Column  . ": $currentNumber</h1>");


?>
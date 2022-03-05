<?php
session_start();

include "Config.php";

include "app/Number.php";
include "app/Table.php";

if(!isset($_SESSION["NUMBERS_CALLED"]))
{
    echo("NO NUMBERS CALLED");
    exit(0);
}

$calledNumbers = $_SESSION["NUMBERS_CALLED"];

$Constants = get_defined_constants();
$table = new App\Table();

$table->BuildTable($calledNumbers);

$header = $Constants['_COLUMNS'];

echo "<table>";
foreach($header as $col){
    echo("<tr>");
    echo("<td>$col</td>");
    foreach($table->Numbers[$col] as $currentNumber){
        echo("<td>$currentNumber</td>");
    }
    echo("</tr>");
}
echo("</table>");


?>
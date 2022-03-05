<?php

include "Config.php";

include "app/Number.php";
include "app/Card.php";


$card = new App\Card();
$card->BuildColumns();

echo ("<table>");
for($row=0;$row<5;$row++){
    echo("<tr>");
    for($col=0;$col<5;$col++){
        echo("<td>" . $card->Columns[$col][$row] . "</td>");
    }
    echo("</tr>");
}
echo("</table>")
?>
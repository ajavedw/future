<?php
$number = htmlspecialchars($_GET["number2"]);
if (is_numeric($number) && $number > 0){
    echo "<table>";
    for ($i=0; $i<11; $i++){
        echo "<tr>";
        echo "<td> multiple of number</td>";
        echo "<td>=</td>";
        echo "<td>". $number*$i."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
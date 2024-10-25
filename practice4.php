<?php
    $size = $_GET['size'];
    echo "<style>table, th, td {border:1px solid black;}</style>";
    echo "<table>";
    for ($i = 0; $i <= $size; $i++){
        echo "<tr>";
        for ($j = 0; $j <= $size; $j++){
            if ($i == 0 && $j == 0){
                echo "<th></th>";
            }
            else if ($i == 0){
                echo "<th>".$j."</th>";
            }
            else if ($j == 0){
                echo "<th>".$i."</th>";
            }
            else{
                $num = $i * $j;
                echo "<th>".$num."</th>";
            }
        }
        echo "</tr>";
    }
    echo "</table>"
?>
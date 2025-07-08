<?php
function ucgen($satirSayisi) {
    $i = 1; 

    while ($i <= $satirSayisi) {
        for ($j = 1; $j <= $i; $j++) {
            echo "O ";
        }
        echo "<br>";
        $i++;
    }
}

ucgen(15);
?>

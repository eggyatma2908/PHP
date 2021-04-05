<?php

$printSegitiga = 5;
if (is_integer(($printSegitiga))) {
for ($i = 1; $i <= $printSegitiga; $i++) {
    for ($j = $i; $j <= $printSegitiga; $j++) {
        echo $j;
    }
    echo "<br/>";
}
} else {
    echo "Data harus number";
}

?>
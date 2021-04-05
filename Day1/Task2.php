<?php

$mtk = 80;
$bahasaIndonesia = 90;
$bahasaInggris = 89;
$ipa = 69;

$rata2 = ($mtk + $bahasaIndonesia + $bahasaInggris + $ipa) / 4;
echo "Rata - rata = ".$rata2;
echo "<br/>";

if ($rata2 >= 90 && $rata2 <= 100) {
    echo "Grade = A";
} else if ($rata2 >= 80 && $rata2 <= 90) {
    echo "Grade = B";
} else if ($rata2 >= 70 && $rata2 <= 80) {
    echo "Grade = C";
} else if ($rata2 >= 60 && $rata2 <= 80) {
    echo "Grade = D";
} else if ($rata2 >= 0 && $rata2 <= 59){
    echo "Grade = E";
} else {
    echo "Nilai rata - rata kurang atau lebih dari yang di tentukan";
}

?>
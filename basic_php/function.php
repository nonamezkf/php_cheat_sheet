<?php

function aritmatika($value1, $value2, $tugas){
    if($tugas == "-"){
        $hasil = $value1 - $value2;
    }else if($tugas == "+"){
        $hasil = $value1 + $value2;
    }else if ($tugas == "/") {
        $hasil = $value1 / $value2;
    }else if($tugas == "*"){
        $hasil = $value1 * $value2;
    }
    return $hasil;
}

echo aritmatika(1,7, "-"); 
echo "<br>";
echo aritmatika(1,7, "+");
echo "<br>";
echo aritmatika(1,7, "/");
echo "<br>";
echo aritmatika(1,7, "*");
echo "<br>";

$nilai1 = 80;
$nilai2 = 68;
$tugasnya = "/";

echo aritmatika($nilai1, $nilai2, $tugasnya);

?>
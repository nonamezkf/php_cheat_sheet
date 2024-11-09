<?php

// cara penulisan array

$buah[0] = "nanas";
$buah[1] = "mangga";
$buah[2] = "pepaya";

$seseorang = array("Ahmat", 23, "Magelang Jawa Tengah", "Indonesia");

$kota = array ("Porong" => "lajuk",
               "Krembung" => "Nanom",
               "Pasuruan" => "bangil");

echo $buah[1];

echo"<br>";

echo $kota["Porong"];

echo"<br>";

echo @$seseorang[2];

?>

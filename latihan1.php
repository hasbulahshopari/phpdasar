<?php 
// array
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["januari", "februari", "maret"];
$arrl = [123, "tulisan", false];

// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// echo $arrl[0];
// echo "<br>";
// echo $bulan[1]

var_dump($hari);
$hari[] = "kamis";
$hari[] =  "jum'at";
echo "<br>";
var_dump($hari);


?>
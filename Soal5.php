<?php
$teks_mentah = "Kamu ADALAH PROGRAmer";
$teks=str_replace(" ","",$teks_mentah);

$a = substr_count($teks, "a");
$i = substr_count($teks, "i");
$u = substr_count($teks, "u");
$e = substr_count($teks, "e");
$o = substr_count($teks, "o");
$A = substr_count($teks, "A");
$I = substr_count($teks, "I");
$U = substr_count($teks, "U");
$E = substr_count($teks, "E");
$O = substr_count($teks, "O");

$vocal = $a+$i+$u+$e+$o+$O+$A+$I+$U+$E;

echo "jumlah huruf vokal dalam kalimat= $vocal";

?>

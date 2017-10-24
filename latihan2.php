<?php

require_once 'penjumlahan.php';

$penjumlahan = new penjumlahan;
$penjumlahan->set_penjumlahan(21,3);
echo"perhitungan bilangan 21 dengan 3"."<br>";
echo"<br>";
echo"=============perhitungan dari bilangan 21 dan 3"."<br>===========<br>";
echo"penjumlahan".$penjumlahan->get_penjumlahan()."<br>";
echo"pengurangan".$penjumlahan->get_pengurangan()."<br>";
echo"pengurangan".$penjumlahan->get_perkalian()."<br>";
echo"pembagian".$penjumlahan->get_pembagian()."<br>";

?>
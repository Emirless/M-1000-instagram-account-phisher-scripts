<?php 

$host = "localhost";
$kullanici_adi = "root";
$parola = "";
$veriTabani_adi = "2fa";

$baglanti = mysqli_connect($host, $kullanici_adi, $parola, $veriTabani_adi);
mysqli_set_charset($baglanti, "UTF8");


?>
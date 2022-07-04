<?php


$um = $_POST['1'];
echo $um;
$dois = $_POST['2'];
echo $dois;
$tres = $_POST['1'];
echo $tres;
$quatro = $_POST['2'];
echo $quatro;
$U=3;
$r=8.31;


$calculo=($U/2*$r)+$um*$dois*$tres*$quatro;


echo "a energia será". $calculo;
?>
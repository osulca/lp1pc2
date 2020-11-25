<?php
include_once "Calculadora.php";
$myCalc =  new Calculadora(61,15);
echo "Suma: ".$myCalc->sumar()."<br>";
echo "Resta: ".$myCalc->restar()."<br>";
echo "Multiplicacion: ".$myCalc->multiplicar()."<br>";
echo "Division: ".$myCalc->dividir()."<br>";
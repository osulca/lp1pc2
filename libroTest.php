<?php
include_once "Libro.php";
$libro1 = new Libro("Tormenta de Espadas", "0154MKBOLD", "George R.Martin", "Gimesh");
$libro2 = new Libro("Festin de Cuervos", "0199MKBHRD", "George R.Martin", "Gimesh");
echo $libro1->getLibroInfo();
echo "<p>";
echo $libro2;

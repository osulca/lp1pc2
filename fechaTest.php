<?php
include_once "Date.php";
$fecha = new Date(12,9, 2013);
echo $fecha->getDay()."/".$fecha->getMonth()."/".$fecha->getYear();

/*echo "<p>";
$fecha->setDay(31);
$fecha->setMonth(12);
$fecha->setYear(2020);
echo $fecha->getDay()."/".$fecha->getMonth()."/".$fecha->getYear();*/

echo "<p>";
$fecha->advance();
echo $fecha->getDay()."/".$fecha->getMonth()."/".$fecha->getYear();

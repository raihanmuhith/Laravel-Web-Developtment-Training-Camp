<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name . "<br>"; // "shaun"
echo "legs : " . $sheep->legs . "<br>"; // 4
echo "cold blooded : " . $sheep->cold_blooded . "<br><br>"; // "no"

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>"; 
echo "legs : " . $kodok->legs . "<br>"; 
echo "cold blooded : " . $kodok->cold_blooded . "<br>"; 
echo $kodok->jump() . "<br><br>"; // "hop hop"

$sungokong = new Ape("kera sakti",2);
echo "Name : " . $sungokong->name . "<br>"; 
echo "legs : " . $sungokong->legs . "<br>"; 
echo "cold blooded : " . $sungokong->cold_blooded . "<br>"; 
echo $sungokong->yell() // "Auooo"

?>
<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");

echo $sheep->getName(); // "shaun"
echo "<br>" . $sheep->getLegs(); // 2
echo "<br>" . $sheep->getColdBlooded(); // false

echo "<br>";
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

echo "<br>";
$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"

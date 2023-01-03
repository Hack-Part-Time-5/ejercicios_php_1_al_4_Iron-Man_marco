<?php

require_once "person.php";
require_once "superPower.php";
require_once "extraPower.php";
require_once "superHero.php";

$ironMan1 = new SuperHero(1, "tony", "Stark", 54, 10,  "Iron-Man","Red-Gold", "Super Armadura");
$ironMan2 = new SuperHero(2, "Marco", "Galian", 47, 12,  "Iron-Man 2","Silver-Black", "Super Armadura");
$ironMan3 = new SuperHero(3, "Jhon", "Rambo", 50, 8,  "Iron-Man 3","Blue-Red","Super Armadura");
$ironMan4 = new SuperHero(4, "Lucia", "Rodriguez", 38, 14,  "Iron-Man 4","Purple-Silver", "Super Armadura");


echo $ironMan1->getSuperPower().PHP_EOL;
echo $ironMan2->getSuperPower().PHP_EOL;
echo $ironMan3->getSuperPower().PHP_EOL;
echo $ironMan4->getSuperPower().PHP_EOL;
echo "Hay " . SuperHero::getNumIronMan() . " Iron-Man".PHP_EOL;


// Ejercito aleatorio de IronMan ---------------------------------------------------------------------------------

print_r(ironRand());
print_r(ironRand());
print_r(ironRand());
print_r(ironRand());
print_r(ironRand());
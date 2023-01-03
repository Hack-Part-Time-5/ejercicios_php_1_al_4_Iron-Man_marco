<?php
require_once "extraPower.php";

class SuperHero extends Person implements ExtraPower {

    use SuperPower;
    
    public $superHero;
    public $armorColor;
    public static $numIronMan = 0;
    
    
    public function __construct($id, $name, $surname, $age, $power, $superHero, $armorColor)
    {
        parent::__construct ($id, $name, $surname, $age, $power);
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->power = $power;
        $this->superHero = $superHero;
        $this->armorColor = $armorColor;
        self::$numIronMan += 1;
    }

    public function extraPower (){
        if ($this->power <= 10) {
            return $this->power * 2;
        }else{
           return $this->power * 1.5;
        }
    }

    public static function getNumIronMan (){
        return self::$numIronMan;
    }

}

function ironRand(){
    $ids = mt_rand(5, 20);
    $names = ['Juan', 'Pedro', 'Maria', 'Ana', 'Pablo'];
    $surnames = ['Sanz', 'Ruiz', 'Perez', 'Ortiz', 'Garcia'];
    $ages = mt_rand(18, 60);
    $powers = mt_rand(5, 30);
    $armorColors = ['Gray-Black', 'Gold-Blue', 'Gold-Blak', 'Red-Silver'];
    

    $randName = $names [array_rand($names)];
    $randSurname = $surnames [array_rand($surnames)];
    $randArmorColor = $armorColors [array_rand($armorColors)];

    $armyIronMan = new SuperHero($ids, $randName, $randSurname, $ages, $powers, "Iron-Man ", $randArmorColor, 'Super Armadura');

    return $armyIronMan;
}
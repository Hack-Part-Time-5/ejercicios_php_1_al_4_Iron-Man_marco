<?php

abstract class Person {
    
    public $id;
    public $name;
    public $surname;
    public $age;
    public $power;

    public function __construct($id, $name, $surname, $age, $power)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->power = $power;

    }

}



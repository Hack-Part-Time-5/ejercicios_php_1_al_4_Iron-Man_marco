<?php

trait SuperPower {

    public $habilities = 'Super Armadura';

    public function getSuperPower(){
        return $this->name . " " . $this->surname . " es " . $this->superHero . ", sus super poderes provienen de una " . $this->habilities . " Y tiene " . $this->extraPower() . " puntos de poder.";
    }
}
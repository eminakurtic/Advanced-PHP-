<?php

abstract class PrevoznoSredstvo{
    public $volan = "";
    public $tockovi = "";
    public $kocnica = "";

    public abstract function upali();
    public abstract function ugasi();
    public abstract function kreni();
    public abstract function stani();
    public abstract function vozi();
}

class Automobil extends PrevoznoSredstvo{
    public function upali(){
        "Automobil je upaljen.";
    }
    public function ugasi(){
        "Automobil je ugašen.";
    }
    public function kreni(){
        "Automobil je krenuo.";
    }
    public function stani(){
        "Automobil je stao.";
    }
    public function vozi(){
        "Automobil vozi.";
    }
}

final class Volvo extends Automobil{

}

$vc60 = new Volvo();
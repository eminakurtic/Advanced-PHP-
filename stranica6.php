<?php

class Kalkulator{
    public $broj1;
    public $broj2;
    public $sabiranje;
    public $oduzimanje;
    public $mnozenje;
    public $dijeljenje;

    public function __construct($broj1, $broj2){
        $this->broj1 = $broj1;
        $this->broj2 = $broj2;
    }

    public function sabiranje(){
        return $this->broj1 + $this->broj2;
    }

    public function oduzimanje(){
        return $this->broj1 - $this->broj2;
    }

    public function mnozenje(){
        return $this->broj1 * $this->broj2;
    }

    public function dijeljenje(){
        return $this->broj1 / $this->broj2;
    }

        public function __toString(){
            return "Sabiranje: " . $this->sabiranje() . "; Oduzimanje: " . $this->oduzimanje() . "; Množenje: " . $this->mnozenje() . "; Dijeljenje: " . $this->dijeljenje();
        }
}

$kalkulator = new Kalkulator(10, 2);
echo $kalkulator;
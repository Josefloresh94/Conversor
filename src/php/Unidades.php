<?php

class Unidades {
    public $from_value;
    public $from_unit;
    public $to_unit;
    public $to_value;

    public function convert_to(){
        
    }
    public function convert_from(){

    }
}

interface UnidadesInterface {
    public function convert_to();
    public function convert_from();
}
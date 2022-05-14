<?php
///EN ESTA CLASE SE TOMARAN LOS DATOS INGRESADOS POR EL USUARIO

include 'ConvertirToVolum.php';

class Volumen {
    const DECIMETRO_CUBICO    = 0.01;
    const METRO_CUBICO        = 1;
    const DECAMETRO_CUBICO    = 100;
    const HECTOMETRO_CUBICO   = 10000;
    const KILOMETRO_CUBICO    = 1000000;

    protected $cantidad     =null;
    protected $from         =null;
    protected $to           =null;
    protected $converVolum  = null;

    protected  function Captura (){
        if (isset($_POST['enviar'])) {
        $this->cantidad = $_POST['cantidad'];
        $this->from = $_POST['from_unit'];
        $this->to = $_POST['to_unit'];
        }       
    }
}
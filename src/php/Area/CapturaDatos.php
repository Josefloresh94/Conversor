<?php
///EN ESTA CLASE SE TOMARAN LOS DATOS INGRESADOS POR EL USUARIO

include 'ConvertirToArea.php';

class Area {
    const DECIMETRO_CUADRADO    = 0.01;
    const METRO_CUADRADO        = 1;
    const DECAMETRO_CUADRADO    = 100;
    const HECTOMETRO_CUADRADO   = 10000;
    const KILOMETRO_CUADRADO    = 1000000;

    protected $cantidad     =null;
    protected $from         =null;
    protected $to           =null;
    protected $converArea  = null;

    protected  function Captura (){
        if (isset($_POST['enviar'])) {
        $this->cantidad = $_POST['cantidad'];
        $this->from = $_POST['from_unit'];
        $this->to = $_POST['to_unit'];
        }       
    }
}
?>
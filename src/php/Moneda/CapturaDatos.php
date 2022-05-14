<?php
///EN ESTA CLASE SE TOMARAN LOS DATOS INGRESADOS POR EL USUARIO

include 'ConvertirToDollar.php';

class Moneda {
    const DOLAR    = 1;
    const EURO     = 1.04;
    const PESO     = 0.05;
    const YUAN     = 6.15;
    const RUBLO    = 0.015;

    protected $cantidad     =null;
    protected $from         =null;
    protected $to           =null;
    protected $converDollar  = null;

    protected  function Captura (){
        if (isset($_POST['enviar'])) {
        $this->cantidad = $_POST['cantidad'];
        $this->from = $_POST['from_unit'];
        $this->to = $_POST['to_unit'];
        }       
    }
}
?>
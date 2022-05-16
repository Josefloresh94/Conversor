<?php
///EN ESTA CLASE SE TOMARAN LOS DATOS INGRESADOS POR EL USUARIO

include 'ConvertirToTime.php';

class Tiempo {
    const SEGUNDO   = 1;
    const MINUTO    = 60;
    const HORA      = 3600;
    const DIA       = 86400;
    const SEMANA    = 604800;

    protected $cantidad     =null;
    protected $from         =null;
    protected $to           =null;
    protected $converTime  = null;

    protected  function Captura (){
        if (isset($_POST['enviar'])) {
        $this->cantidad = $_POST['cantidad'];
        $this->from = $_POST['from_unit'];
        $this->to = $_POST['to_unit'];
        }       
    }
}
?>
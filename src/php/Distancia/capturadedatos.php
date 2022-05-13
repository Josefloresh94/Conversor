<?php
///EN ESTA CLASE SE TOMARAN LOS DATOS INGRESADOS POR EL USUARIO

 
  class Distancias {
    const millimeters= 1000;
    const centimeters= 100;
    const meters= 1;
    const kilometers=1000;
    const miles= 1609;

    public $cantidad=null;
    public $from=null;
    public $to=null;
    public $converM = null;
    

    public  function Captura (){
        if (isset($_POST['enviar'])) {
            $this->cantidad = $_POST['cantidad'];
            $this->from = $_POST['from_unit'];
            $this->to = $_POST['to_unit'];
            $this->converM;
            
            return $this->cantidad;
            return $this->from;
            return $this->to;
            return $this->converM;
           
        }       
    }

}

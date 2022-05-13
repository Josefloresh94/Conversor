<?php
///EN ESTA CLASE SE TOMARAN LOS DATOS INGRESADOS POR EL USUARIO

 
  class Distancias {
    const Milimetros= 1000;
    const Centimetros= 100;
    const Metros= 1;
    const Kilometros=1000;
    const Millas= 1609;

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

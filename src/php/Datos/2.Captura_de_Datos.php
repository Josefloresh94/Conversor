<?php
///EN ESTA CLASE SE TOMARAN LOS DATOS INGRESADOS POR EL USUARIO

include '3.Convertir_a_Bytes.php';

class Datos {
  const BYTE = 1;
  const KILOBYTE = 1024;
  const MEGABYTE = 1048576;
  const GIGABYTE = 1073741824;
  const TERABYTE = 1099511627776;

  public $cantidad=null;
  public $from=null;
  public $to=null;
  public $converBytes = null;

  public  function Captura (){
    if (isset($_POST['enviar'])) {
      $this->cantidad = $_POST['cantidad'];
      $this->from = $_POST['from_unit'];
      $this->to = $_POST['to_unit'];
      return $this->cantidad;
      return $this->from;
      return $this->to;
        }       
    }
}
?>
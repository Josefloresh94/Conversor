<?php
///EN ESTA CLASE SE TOMARAN LOS DATOS INGRESADOS POR EL USUARIO

<<<<<<< HEAD:src/php/Datos/P2_Captura_de_Datos.php
include 'P3_Convertir_a_Bytes.php';
=======
include 'Convertir_a_Bytes.php';
>>>>>>> cccce36c8b160c56c4ee4671fc47f6757e1b1d56:src/php/Datos/Captura_de_Datos.php

class Datos {
  const BYTE = 1;
  const KILOBYTE = 1024;
  const MEGABYTE = 1048576;
  const GIGABYTE = 1073741824;
  const TERABYTE = 1099511627776;

  protected $cantidad=null;
  protected $from=null;
  protected $to=null;
  protected $converBytes = null;

  protected  function Captura (){
    if (isset($_POST['enviar'])) {
      $this->cantidad = $_POST['cantidad'];
      $this->from = $_POST['from_unit'];
      $this->to = $_POST['to_unit'];
        }       
    }
}
?>
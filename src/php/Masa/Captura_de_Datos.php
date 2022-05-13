<?php
///EN ESTA CLASE SE TOMARAN LOS DATOS INGRESADOS POR EL USUARIO

include 'Convertir_a_Gramos.php';

class Masa {
  const MICROGRAMO  = 0.000001;
  const MILIGRAMO   = 0.001;
  const GRAMO       = 1;
  const KILOGRAMO   = 1000;
  const TONELADA    = 1000000;

  protected $cantidad=null;
  protected $from=null;
  protected $to=null;
  protected $convertGram = null;

  protected  function Captura (){
    if (isset($_POST['enviar'])) {
      $this->cantidad = $_POST['cantidad'];
      $this->from = $_POST['from_unit'];
      $this->to = $_POST['to_unit'];
        }       
    }
}
?>
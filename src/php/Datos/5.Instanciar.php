<?php 
///EN ESTA CLASE VAMOS A INSTANCIAR

class Instanciar extends Bytes_a_Unidades{

  public function Instancia() {
    $this->Captura ();
    $this->Convertir_a_Bytes ();
    $this->Bytes_a_Unidades ();
  }
}

$calculadora = new Instanciar;
$calculadora -> Instancia ();


?>
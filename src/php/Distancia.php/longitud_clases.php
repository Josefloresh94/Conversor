<?php

interface Distancia{
  public function Convertir();
}

  class Padre  implements Distancia {
      public $millimeters = 0.001;
      public $centimeters = 0.01;
      public $meters = 1;
      public $kilometers = 1000;
      public $miles = 1.609;
      
          
        public function Convertir(){
          if (isset($_POST['enviar'])){
           $cantidad = $_POST['cantidad'];   
            $this->from = $_POST['from_unit'];
            $to = $_POST['to_unit'];
          }
    //// CONVERTIR A M
              
                if ($this->from=='millimeters') {
                  $converM = $cantidad/1000;
                } elseif ($this->from=='centimeters'){
                  $converM = $cantidad/100;
                } elseif ($this->from=='meters'){
                  $converM = $cantidad*1;
                } elseif ($this->fromm=='kilometers'){
                  $converM = $cantidad*1000;
                }  elseif ($this->from=='miles'){
                  $converM = $cantidad*1609;
                }  else {
                  ;
              }         
            }
  }
    class Hija extends Padre{
    }

$prueba = new Hija;
$prueba->Convertir();

?>
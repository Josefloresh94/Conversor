<?php
/// CONVERTIR A METROS 

include 'capturadedatos.php';

class Unidad_a_M extends Distancias  {

    protected function Convertir_a_Mts(){
       $this->Captura ();
 
       if ($this->from=='Milímetros') {
         $this->converM = $this->cantidad/parent:: Milimetros;
 
       } elseif ($this->from=='Centímetros'){
         $this->converM = $this->cantidad/parent:: Centimetros;
 
       } elseif ($this->from=='Metros'){
         $this->converM = $this->cantidad*parent:: Metros;
 
       } elseif ($this->from=='Kilómetros'){
         $this->converM = $this->cantidad*parent:: Kilometros;
 
       }  elseif ($this->from=='Millas'){
         $this->converBytes = $this->cantidad*parent:: Millas;
 
       }  else {
         ;
     } 
     
}
}  
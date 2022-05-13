<?php
/// CONVERTIR A METROS 

include 'capturadedatos.php';

class Unidad_a_M extends Distancias  {

    protected function Convertir_a_Mts(){
       $this->Captura ();
 
       if ($this->from=='millimeters') {
         $this->converM = $this->cantidad/parent:: millimeters;
 
       } elseif ($this->from=='centimeters'){
         $this->converM = $this->cantidad/parent:: centimeters;
 
       } elseif ($this->from=='meters'){
         $this->converM = $this->cantidad*parent:: meters;
 
       } elseif ($this->from=='kilometers'){
         $this->converM = $this->cantidad*parent:: kilometers;
 
       }  elseif ($this->from=='miles'){
         $this->converBytes = $this->cantidad*parent:: miles;
 
       }  else {
         ;
     } 
     
}
}  

/// CONVERTIR DE METROS A LAS DEMAS DISTANCIAS

    class M_a_distancias extends Unidad_a_M {

        public function M_a_Unidad (){
            $this->Captura ();
            $this->Convertir_a_Mts();

        
            
            if ($this->to=='millimeters') {
                $ConvertirUnidad = $this->converM  * parent::millimeters;
            echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to ;

            } elseif ($this->to=='centimeters'){
                $ConvertirUnidad = $this->converM  * parent::centimeters;
                echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;

            } elseif ($this->to=='meters'){
                $ConvertirUnidad = $this->converM  * parent::meters;
                echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;

            } elseif ($this->to=='kilometers'){
                $ConvertirUnidad = $this->converM  / parent::kilometers;
                echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;
                
            }  elseif ($this->to=='miles'){
                $ConvertirUnidad = $this->converM  / parent::miles;
                echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;
            }  else {
                ;
            }         
        }

    }

    class Instanciar extends M_a_distancias{

        public function Instancia() {
          $this->Captura ();
          $this->Convertir_a_Mts ();
          $this->M_a_Unidad ();
        }
      }
      
      $calculadora = new Instanciar;
      $calculadora -> Instancia ();


    
        


      
      




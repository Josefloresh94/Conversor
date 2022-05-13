<?php
/// CONVERTIR DE METROS A LAS DEMAS DISTANCIAS

include 'conversionametros.php';

    class M_a_distancias extends Unidad_a_M {

        public function M_a_Unidad (){
            $this->Captura ();
            $this->Convertir_a_Mts();

        
            
            if ($this->to=='Milímetros') {
                $ConvertirUnidad = $this->converM  * parent::Milimetros;
            echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to ;

            } elseif ($this->to=='Centímetros'){
                $ConvertirUnidad = $this->converM  * parent::Centimetros;
                echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;

            } elseif ($this->to=='Metros'){
                $ConvertirUnidad = $this->converM  * parent::Metros;
                echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;

            } elseif ($this->to=='Kilómetros'){
                $ConvertirUnidad = $this->converM  / parent::Kilometros;
                echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;
                
            }  elseif ($this->to=='Millas'){
                $ConvertirUnidad = $this->converM  / parent::Millas;
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


    
        


      
      




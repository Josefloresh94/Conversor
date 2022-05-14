<?php
/// CONVERTIR A METROS 

include 'CapturaDatos.php';

class Unidad_a_M extends Distancias  {

    protected function Convertir_a_Mts(){
        $this->Captura ();

        if ($this->from=='Milimetros') {
        	$this->converM = $this->cantidad / parent::Milimetros;

        } elseif ($this->from=='Centimetros'){
        	$this->converM = $this->cantidad / parent::Centimetros;
		
        } elseif ($this->from=='Metros'){
        	$this->converM = $this->cantidad * parent::Metros;

        } elseif ($this->from=='Kilometros'){
        	$this->converM = $this->cantidad * parent::Kilometros;

        }elseif ($this->from=='Millas'){
        	$this->converM = $this->cantidad * parent::Millas;

        }  else {
        ;
    	} 
	}
}  
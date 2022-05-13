<?php
///EN ESTA CLASE CONVERTIRREMOS DE BYTES A UNIDAD SELECCIONADA

include 'Instanciar.php';

class Gramos_a_Unidad extends Unidad_a_Gramos {
  
  protected function Gramos_a_Unidades (){
    $this->Captura ();
    $this->Convertir_a_Gramos ();
 
      switch ($this->to){
        case 'Bytes':
          $ConvertirUnidad = $this->convertGram / parent::MICROGRAMO;
          echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;
          break;
        case "Kilobytes":
          $ConvertirUnidad = $this->convertGram / parent::MILIGRAMO;
          echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
          break;
        case "Megabytes":
          $ConvertirUnidad = $this->convertGram / parent::GRAMO;
          echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
          break;
        case "Gigabytes":
          $ConvertirUnidad = $this->convertGram / parent::KILOGRAMO;
          echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
          break;
        case "Terabytes":
          $ConvertirUnidad = $this->convertGram / parent::TONELADA;
          echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
        break;
      }
    }
  }
?>
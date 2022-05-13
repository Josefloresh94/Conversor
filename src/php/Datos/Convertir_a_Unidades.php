<?php
///EN ESTA CLASE CONVERTIRREMOS DE BYTES A UNIDAD SELECCIONADA

<<<<<<< HEAD:src/php/Datos/P4_Convertir_a_Unidades.php
include 'P5_Instanciar.php';
=======
include 'Instanciar.php';
>>>>>>> cccce36c8b160c56c4ee4671fc47f6757e1b1d56:src/php/Datos/Convertir_a_Unidades.php

class Bytes_a_Unidad extends Unidad_a_Bytes {
  
  protected function Bytes_a_Unidades (){
    $this->Captura ();
    $this->Convertir_a_Bytes ();
 
      switch ($this->to){
        case 'Bytes':
          $ConvertirUnidad = $this->converBytes / parent::BYTE;
          echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;
          break;
        case "Kilobytes":
          $ConvertirUnidad = $this->converBytes / parent::KILOBYTE;
          echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
          break;
        case "Megabytes":
          $ConvertirUnidad = $this->converBytes / parent::MEGABYTE;
          echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
          break;
        case "Gigabytes":
          $ConvertirUnidad = $this->converBytes / parent::GIGABYTE;
          echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
          break;
        case "Terabytes":
          $ConvertirUnidad = $this->converBytes / parent::TERABYTE;
          echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
        break;
      }
    }
  }
?>
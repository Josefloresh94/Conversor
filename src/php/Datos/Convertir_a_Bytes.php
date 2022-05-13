<?php
///EN ESTA CLASE CONVERTIRREMOS DE UNIDAD DE ORIGEN SELECCIONADA A BYTES

<<<<<<< HEAD:src/php/Datos/P3_Convertir_a_Bytes.php
include 'P4_Convertir_a_Unidades.php';
=======
include 'Convertir_a_Unidades.php';
>>>>>>> cccce36c8b160c56c4ee4671fc47f6757e1b1d56:src/php/Datos/Convertir_a_Bytes.php

class Unidad_a_Bytes extends Datos {

   protected function Convertir_a_Bytes(){
      $this->Captura ();
      switch ($this->from) {
         case 'Bytes':
         $this->converBytes = $this->cantidad * parent::BYTE;
            break;
         case 'Kilobytes':
            $this->converBytes = $this->cantidad * parent::KILOBYTE;
            break;
         case "Megabytes":
            $this->converBytes = $this->cantidad * parent::MEGABYTE;
            break;
         case "Gigabytes":
            $this->converBytes = $this->cantidad * parent::GIGABYTE;
            break;
         case "Terabytes":
            $this->converBytes = $this->cantidad * parent::TERABYTE;
            break;
      }
   }
}
?>
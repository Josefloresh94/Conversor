<?php
///EN ESTA CLASE CONVERTIRREMOS DE UNIDAD DE ORIGEN SELECCIONADA A BYTES

include 'Convertir_a_Unidades.php';

class Unidad_a_Gramos extends Masa {

   protected function Convertir_a_Gramos(){
      $this->Captura ();
      switch ($this->from) {
         case 'Microgramo':
         $this->converBytes = $this->cantidad * parent::MICROGRAMO;
            break;
         case 'Miligramo':
            $this->converBytes = $this->cantidad * parent::MILIGRAMO;
            break;
         case "Gramo":
            $this->converBytes = $this->cantidad * parent::GRAMO;
            break;
         case "Kilogramo":
            $this->converBytes = $this->cantidad * parent::KILOGRAMO;
            break;
         case "Tonelada":
            $this->converBytes = $this->cantidad * parent::TONELADA;
            break;
      }
   }
}
?>
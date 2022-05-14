<?php
///EN ESTA CLASE CONVERTIRREMOS DE UNIDAD DE ORIGEN SELECCIONADA A GRAMOS

include 'ConvertirToUnits.php';

class Unidad_a_Gramos extends Masa {

    protected function Convertir_a_Gramos(){
        $this->Captura ();
        switch ($this->from) {
            case 'Microgramo':
                $this->converGrams = $this->cantidad * parent::MICROGRAMO;
                break;
            case 'Miligramo':
                $this->converGrams = $this->cantidad * parent::MILIGRAMO;
                break;
            case "Gramo":
                $this->converGrams = $this->cantidad * parent::GRAMO;
                break;
            case "Kilogramo":
                $this->converGrams = $this->cantidad * parent::KILOGRAMO;
                break;
            case "Tonelada":
                $this->converGrams = $this->cantidad * parent::TONELADA;
                break;
        }
    }
}
?>
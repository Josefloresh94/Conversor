<?php
///EN ESTA CLASE CONVERTIRREMOS DE UNIDAD DE ORIGEN SELECCIONADA A AREA

include 'ConvertirToUnits.php';

class Unidad_a_Tiempo extends Tiempo {

    protected function Convertir_a_Tiempo(){
        $this->Captura ();
        switch ($this->from) {
            case "Segundo":
                $this->converTime = $this->cantidad * parent::SEGUNDO;
                break;
            case "Minuto":
                $this->converTime = $this->cantidad * parent::MINUTO;
                break;
            case "Hora":
                $this->converTime = $this->cantidad * parent::HORA;
                break;
            case "Dia":
                $this->converTime = $this->cantidad * parent::DIA;
                break;
            case "Semana":
                $this->converTime = $this->cantidad * parent::SEMANA;
                break;
        }
    }
}
?>
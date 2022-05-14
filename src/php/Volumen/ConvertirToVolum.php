<?php
///EN ESTA CLASE CONVERTIRREMOS DE UNIDAD DE ORIGEN SELECCIONADA A AREA

include 'ConvertirToUnits.php';

class Unidad_a_Volumen extends Volumen {

    protected function Convertir_a_Volumen(){
        $this->Captura ();
        switch ($this->from) {
            case "Decimetro Cubico":
                $this->converVolum = $this->cantidad * parent::DECIMETRO_CUBICO;
                break;
            case "Metro Cubico":
                $this->converVolum = $this->cantidad * parent::METRO_CUBICO;
                break;
            case "Decametro Cubico":
                $this->converVolum = $this->cantidad * parent::DECAMETRO_CUBICO;
                break;
            case "Hectometro Cubico":
                $this->converVolum = $this->cantidad * parent::HECTOMETRO_CUBICO;
                break;
            case "Kilometro Cubico":
                $this->converVolum = $this->cantidad * parent::KILOMETRO_CUBICO;
                break;
        }
    }
}
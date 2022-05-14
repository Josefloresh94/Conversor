<?php
///EN ESTA CLASE CONVERTIRREMOS DE UNIDAD DE ORIGEN SELECCIONADA A AREA

include 'ConvertirToUnits.php';

class Unidad_a_Area extends Area {

    protected function Convertir_a_Area(){
        $this->Captura ();
        switch ($this->from) {
            case "Decimetro Cuadrado":
                $this->converArea = $this->cantidad * parent::DECIMETRO_CUADRADO;
                break;
            case "Metro Cuadrado":
                $this->converArea = $this->cantidad * parent::METRO_CUADRADO;
                break;
            case "Decametro Cuadrado":
                $this->converArea = $this->cantidad * parent::DECAMETRO_CUADRADO;
                break;
            case "Hectometro Cuadrado":
                $this->converArea = $this->cantidad * parent::HECTOMETRO_CUADRADO;
                break;
            case "Kilometro Cuadrado":
                $this->converArea = $this->cantidad * parent::KILOMETRO_CUADRADO;
                break;
        }
    }
}
?>
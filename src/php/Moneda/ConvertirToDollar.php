<?php
///EN ESTA CLASE CONVERTIRREMOS DE UNIDAD DE ORIGEN SELECCIONADA A DOLAR

include 'ConvertirToUnits.php';

class Unidad_a_Dolar extends Moneda {

    protected function Convertir_a_Dolar(){
        $this->Captura ();
        switch ($this->from) {
            case "Dolar":
                $this->converDollar = $this->cantidad * parent::DOLAR;
                break;
            case "Euro":
                $this->converDollar = $this->cantidad * parent::EURO;
                break;
            case "Peso":
                $this->converDollar = $this->cantidad * parent::PESO;
                break;
            case "Yuan":
                $this->converDollar = $this->cantidad * parent::YUAN;
                break;
            case "Rublo":
                $this->converDollar = $this->cantidad * parent::RUBLO;
                break;
        }
    }
}
?>
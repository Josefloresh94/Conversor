<?php
///EN ESTA CLASE CONVERTIRREMOS DE DOLAR A UNIDAD SELECCIONADA

include 'Instanciar.php';

class Dolar_a_Unidad extends Unidad_a_Dolar {
    
    protected function Dolar_a_Unidades (){
        $this->Captura ();
        $this->Convertir_a_Dolar ();
    
        switch ($this->to){
            case "Dolar":
                $ConvertirUnidad = $this->converDollar / parent::DOLAR;
                echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;
            break;
            case "Euro":
                $ConvertirUnidad = $this->converDollar / parent::EURO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Peso":
                $ConvertirUnidad = $this->converDollar / parent::PESO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Yuan":
                $ConvertirUnidad = $this->converDollar / parent::YUAN;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Rublo":
                $ConvertirUnidad = $this->converDollar / parent::RUBLO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
        }
    }
}
?>
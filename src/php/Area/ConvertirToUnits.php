<?php
///EN ESTA CLASE CONVERTIRREMOS DE AREA A UNIDAD SELECCIONADA

include 'Instanciar.php';

class Area_a_Unidad extends Unidad_a_Area {
    
    protected function Area_a_Unidades (){
        $this->Captura ();
        $this->Convertir_a_Area ();
    
        switch ($this->to){
            case "Decimetro Cuadrado":
                $ConvertirUnidad = $this->converArea / parent::DECIMETRO_CUADRADO;
                echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;
            break;
            case "Metro Cuadrado":
                $ConvertirUnidad = $this->converArea / parent::METRO_CUADRADO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Decametro Cuadrado":
                $ConvertirUnidad = $this->converArea / parent::DECAMETRO_CUADRADO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Hectometro Cuadrado":
                $ConvertirUnidad = $this->converArea / parent::HECTOMETRO_CUADRADO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Kilometro Cuadrado":
                $ConvertirUnidad = $this->converArea / parent::KILOMETRO_CUADRADO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
        }
    }
}
?>
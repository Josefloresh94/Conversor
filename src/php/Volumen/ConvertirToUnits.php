<?php
///EN ESTA CLASE CONVERTIRREMOS DE AREA A UNIDAD SELECCIONADA

include 'Instanciar.php';

class Volumen_a_Unidad extends Unidad_a_Volumen {
    
    protected function Volumen_a_Unidades (){
        $this->Captura ();
        $this->Convertir_a_Volumen ();
    
        switch ($this->to){
            case "Decimetro Cubico":
                $ConvertirUnidad = $this->converVolum / parent::DECIMETRO_CUBICO;
                echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;
            break;
            case "Metro Cubico":
                $ConvertirUnidad = $this->converVolum / parent::METRO_CUBICO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Decametro Cubico":
                $ConvertirUnidad = $this->converVolum / parent::DECAMETRO_CUBICO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Hectometro Cubico":
                $ConvertirUnidad = $this->converVolum / parent::HECTOMETRO_CUBICO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Kilometro Cubico":
                $ConvertirUnidad = $this->converVolum / parent::KILOMETRO_CUBICO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
        }
    }
}
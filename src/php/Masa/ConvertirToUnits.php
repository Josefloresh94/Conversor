<?php
///EN ESTA CLASE CONVERTIRREMOS DE GRAMOS A UNIDAD SELECCIONADA

include 'Instanciar.php';

class Gramos_a_Unidad extends Unidad_a_Gramos {
    
    protected function Gramos_a_Unidades (){
        $this->Captura ();
        $this->Convertir_a_Gramos ();
    
        switch ($this->to){
            case 'Microgramo':
                $ConvertirUnidad = $this->converGrams / parent::MICROGRAMO;
                echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;
            break;
            case "Miligramo":
                $ConvertirUnidad = $this->converGrams / parent::MILIGRAMO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Gramo":
                $ConvertirUnidad = $this->converGrams / parent::GRAMO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Kilogramo":
                $ConvertirUnidad = $this->converGrams / parent::KILOGRAMO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Tonelada":
                $ConvertirUnidad = $this->converGrams / parent::TONELADA;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
        }
    }
}
?>
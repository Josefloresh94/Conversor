<?php
///EN ESTA CLASE CONVERTIRREMOS DE AREA A UNIDAD SELECCIONADA

include 'Instanciar.php';

class Tiempo_a_Unidad extends Unidad_a_Tiempo {
    
    protected function Tiempo_a_Unidades (){
        $this->Captura ();
        $this->Convertir_a_Tiempo ();
    
        switch ($this->to){
            case "Segundo":
                $ConvertirUnidad = $this->converTime / parent::SEGUNDO;
                echo $this->cantidad." ".$this->from." equivale ".$ConvertirUnidad." ".$this->to;
            break;
            case "Minuto":
                $ConvertirUnidad = $this->converTime / parent::MINUTO;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Hora":
                $ConvertirUnidad = $this->converTime / parent::HORA;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Dia":
                $ConvertirUnidad = $this->converTime / parent::DIA;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
            case "Semana":
                $ConvertirUnidad = $this->converTime / parent::SEMANA;
                echo $this->cantidad." ".$this->from." equivale a ".$ConvertirUnidad." ".$this->to;
            break;
        }
    }
}
?>
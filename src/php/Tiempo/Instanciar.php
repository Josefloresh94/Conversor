<?php 
///EN ESTA CLASE VAMOS A INSTANCIAR

class Instanciar extends Tiempo_a_Unidad{

    public function Instancia() {
        $this->Captura();
        $this->Convertir_a_Tiempo();
        $this->Tiempo_a_Unidades();
    }
}

$calculadora = new Instanciar;
$calculadora -> Instancia ();


?>
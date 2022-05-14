<?php 
///EN ESTA CLASE VAMOS A INSTANCIAR

class Instanciar extends Area_a_Unidad{

    public function Instancia() {
        $this->Captura();
        $this->Convertir_a_Area();
        $this->Area_a_Unidades();
    }
}

$calculadora = new Instanciar;
$calculadora -> Instancia ();


?>
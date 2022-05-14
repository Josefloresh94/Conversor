<?php 
///EN ESTA CLASE VAMOS A INSTANCIAR

class Instanciar extends Volumen_a_Unidad{

    public function Instancia() {
        $this->Captura();
        $this->Convertir_a_Volumen();
        $this->Volumen_a_Unidades();
    }
}

$calculadora = new Instanciar;
$calculadora -> Instancia ();
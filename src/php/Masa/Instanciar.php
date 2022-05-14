<?php 
///EN ESTA CLASE VAMOS A INSTANCIAR

class Instanciar extends Gramos_a_Unidad{

    public function Instancia() {
        $this->Captura();
        $this->Convertir_a_Gramos();
        $this->Gramos_a_Unidades();
    }
}

$calculadora = new Instanciar;
$calculadora -> Instancia ();


?>
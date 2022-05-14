<?php 
///EN ESTA CLASE VAMOS A INSTANCIAR

class Instanciar extends Dolar_a_Unidad{

    public function Instancia() {
        $this->Captura();
        $this->Convertir_a_Dolar();
        $this->Dolar_a_Unidades();
    }
}

$calculadora = new Instanciar;
$calculadora -> Instancia ();


?>
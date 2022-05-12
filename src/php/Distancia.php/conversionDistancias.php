<?php
/// DATOS INGRESADOS POR EL USUARIO

include 'longitud_clases.php';

class Distancias {
    public $millimeters ;
    public $centimeters ;
    public $meters ;
    public $kilometers;
    public $miles ;

  public $cantidad=null;
  public $from=null;
  public $to=null;
  public $converM = null;

  public  function Captura (){
    if (isset($_POST['enviar'])) {
      $this->cantidad = $_POST['cantidad'];
      $this->from = $_POST['from_unit'];
      $this->to = $_POST['to_unit'];
      $this->converM;
      return $this->cantidad;
      return $this->from;
      return $this->to;
      return $this->converM;
        }       
    }

}
class M_a_Unidades extends Distancias{

    public function M_a_Unidad (){
       
        if ($this->to=='millimeters') {
            $converLong = $this->converM*1000;
            echo $this->cantidad." ".$this->from." equivale ".$converLong." ".$this->to;
        } elseif ($this->to=='centimeters'){
            $converLong = $this->converM*100;
            echo $this->cantidad." ".$this->from." equivale ".$converLong." ".$this->to;
        } elseif ($this->to=='meters'){
            $converLong = $this->converM*1;
            echo $this->cantidad." ".$this->from." equivale ".$converLong." ".$this->to;
        } elseif ($this->to=='kilometers'){
            $converLong = $this->converM/1000;
            echo $this->cantidad." ".$this->from." equivale ".$converLong." ".$this->to;
        }  elseif ($this->to=='miles'){
            $converLong = $this->converM/1609;
            echo $this->cantidad." ".$this->from." equivale ".$converLong." ".$this->to;
        }  else {
            ;
        }         
}
}

?>
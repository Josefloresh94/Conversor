<?php
interface Datos{
  public function Bytes();
  public function KiloBytes();
  public function MegaBytes();
  public function GigaBytes();
  public function TeraBytes();
}

class Padre implements Datos {
public $bytes = 1;
public $kilobytes = 1024;
public $megabytes = 1048576;
public $gigabytes = 1073741824;
public $terabytes = 1099511627776;
public $enviar;
public $cantidad;
public $from;
public $to;



public function Bytes(){
  if (isset($_POST['enviar'])){
    $this->cantidad = $_POST['cantidad'];   
    $this->from = $_POST['from_unit'];
    $this->to = $_POST['to_unit'];
    
    if ($this->from=="Bytes" & $this->to=="Bytes") {
        echo $this->cantidad . " ". $this->from . " = " . $this->cantidad . " " . $this->to;
        }
    if ($this->from=="Bytes" & $this->to=="Kilobytes") {
        $resultado = $this->cantidad / $this->kilobytes;
        echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,8,".",",")) . " ". $this->to;
        }
    if ($this->from=="Bytes" & $this->to=="Megabytes") {
      $resultado = $this->cantidad/$this->megabytes;
      echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,16,".",",")) . " ". $this->to;
        }
    if ($this->from=="Bytes" & $this->to=="Gigabytes") {
      $resultado = $this->cantidad/$this->gigabytes;
      echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,16,".",",")) . " ". $this->to;
        }
    if ($this->from=="Bytes" & $this->to=="Terabytes") {
      $resultado = $this->cantidad/$this->terabytes;
      echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,16,".",",")) . " ". $this->to;
        }
      }
    }
//    
public function KiloBytes(){
    if (isset($_POST['enviar'])){
    $this->cantidad = $_POST['cantidad'];   
    $this->from = $_POST['from_unit'];
    $this->to = $_POST['to_unit'];

    if ($this->from=="Kilobytes" & $this->to=="Bytes") {
      $resultado = $this->cantidad * $this->kilobytes;
      echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,0,".",",")) . " ". $this->to;
    }
    if ($this->from=="Kilobytes" & $this->to=="Kilobytes") {
        echo $this->cantidad . " ". $this->from . " = " . $this->cantidad . " " . $this->to;
        }
    if ($this->from=="Kilobytes" & $this->to=="Megabytes") {
      $resultado = $this->cantidad / $this->kilobytes;
      echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,6,".",",")) . " ". $this->to;
        }
    if ($this->from=="Kilobytes" & $this->to=="Gigabytes") {
      $resultado = $this->cantidad / $this->megabytes;
      echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,10,".",",")) . " ". $this->to;
        }
        if ($this->from=="Kilobytes" & $this->to=="Terabytes") {
        $resultado = $this->cantidad / $this->gigabytes;
        echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,12,".",",")) . " ". $this->to;
        }
      }
    }
// 
public function MegaBytes(){
    if (isset($_POST['enviar'])){
    $this->cantidad = $_POST['cantidad'];   
    $this->from = $_POST['from_unit'];
    $this->to = $_POST['to_unit'];

    if ($this->from=="Megabytes" & $this->to=="Bytes") {
      $resultado = $this->cantidad * $this->megabytes;
      echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,0,".",",")) . " ". $this->to;
    }
    if ($this->from=="Megabytes" & $this->to=="Kilobytes") {
        $resultado = $this->cantidad * $this->kilobytes;
        echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,0,".",",")) . " ". $this->to;
        }
    if ($this->from=="Megabytes" & $this->to=="Megabytes") {
        echo $this->cantidad . " ". $this->from . " = " . $this->cantidad . " " . $this->to;
        }
    if ($this->from=="Megabytes" & $this->to=="Gigabytes") {
        $resultado = $this->cantidad / $this->kilobytes;
        echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,6,".",",")) . " ". $this->to;
        }
    if ($this->from=="Megabytes" & $this->to=="Terabytes") {
        $resultado = $this->cantidad / $this->megabytes;
        echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,10,".",",")) . " ". $this->to;
        }
      }
    }
//
public function GigaBytes(){
    if (isset($_POST['enviar'])){
    $this->cantidad = $_POST['cantidad'];   
    $this->from = $_POST['from_unit'];
    $this->to = $_POST['to_unit'];

    if ($this->from=="Gigabytes" & $this->to=="Bytes") {
        $resultado = $this->cantidad * $this->megabytes;
        echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,0,".",",")) . " ". $this->to;
    }
    if ($this->from=="Gigabytes" & $this->to=="Kilobytes") {
        $resultado = $this->cantidad * $this->gigabytes;
        echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,0,".",",")) . " ". $this->to;
        }
    if ($this->from=="Gigabytes" & $this->to=="Megabytes") {
      $resultado = $this->cantidad * $this->kilobytes;
      echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,0,".",",")) . " ". $this->to;
        }
    if ($this->from=="Gigabytes" & $this->to=="Gigabytes") {
        echo $this->cantidad . " ". $this->from . " = " . $this ->cantidad . " " . $this->to;
        }
    if ($this->from=="Gigabytes" & $this->to=="Terabytes") {
        $resultado = $this->cantidad / $this->kilobytes;
        echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,6,".",",")) . " ". $this->to;
        }
      }
    }
//
public function TeraBytes(){
    if (isset($_POST['enviar'])){
    $this->cantidad = $_POST['cantidad'];   
    $this->from = $_POST['from_unit'];
    $this->to = $_POST['to_unit'];

    if ($this->from=="Terabytes" & $this->to=="Bytes") {
        $resultado = $this->cantidad * $this->terabytes;
        echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,0,".",",")) . " ". $this->to;
    }
    if ($this->from=="Terabytes" & $this->to=="Kilobytes") {
        $resultado = $this->cantidad * $this->gigabytes;
        echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,0,".",",")) . " ". $this->to;
        }
    if ($this->from=="Terabytes" & $this->to=="Megabytes") {
        $resultado = $this->cantidad * $this->megabytes;
        echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,0,".",",")) . " ". $this->to;
        }
    if ($this->from=="Terabytes" & $this->to=="Gigabytes") {
        $resultado = $this->cantidad * $this->kilobytes;
        echo $this->cantidad . " ". $this->from . " = " . rtrim(number_format($resultado,0,".",",")) . " ". $this->to;
        }
    if ($this->from=="Terabytes" & $this->to=="Terabytes") {
        echo $this->cantidad . " ". $this->from . " = " . $this->cantidad . " " . $this->to;
        }
      }
    }
//       
}

class Hija extends Padre{
    
}

$prueba = new Hija;
$prueba->Bytes();
$prueba->KiloBytes();
$prueba->MegaBytes();
$prueba->GigaBytes();
$prueba->TeraBytes();

?>
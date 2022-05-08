<?php
interface Datos{
  public function Convertir();
}

class Padre implements Datos {
  public $bytes = 1;
  public $kilobytes = 1024;
  public $megabytes = 1048576;
  public $gigabytes = 1073741824;
  public $terabytes = 1099511627776;
  
  public function Convertir(){
    if (isset($_POST['enviar'])){
      $cantidad = $_POST['cantidad'];   
      $from = $_POST['from_unit'];
      $to = $_POST['to_unit'];
//// PEDIR CANTIDAD Y CONVERTIR LA SELECCION "FROM" A BYTE
     switch ($from) {
       case 'Bytes':
        $converBytes = $cantidad * 1;
         break;
         case 'Kilobytes':
          $converBytes = $cantidad * 1024;
         break;
         case "Megabytes":
          $converBytes = $cantidad * 1048576;
         break;
         case "Gigabytes":
          $converBytes = $cantidad * 1073741824;
         break;
         case "Terabytes":
         $converBytes = $cantidad * 1099511627776;
         break; }
////CONVERTIR A UNIDAD SELECCIONADA EN TO
       switch ($to){
        case 'Bytes':
          $ConvertirUnidad = $converBytes / 1;
          echo $cantidad." ".$from." equivale ".$ConvertirUnidad." ".$to;
         break;
        case "Kilobytes":
          $ConvertirUnidad = $converBytes / 1024;
          echo $cantidad." ".$from." equivale a ".$ConvertirUnidad." ".$to;
        break;
        case "Megabytes":
          $ConvertirUnidad = $converBytes / 1048576;
          echo $cantidad." ".$from." equivale a ".$ConvertirUnidad." ".$to;
        break;
        case "Gigabytes":
          $ConvertirUnidad = $converBytes / 1073741824;
          echo $cantidad." ".$from." equivale a ".$ConvertirUnidad." ".$to;
        break;
        case "Terabytes":
          $ConvertirUnidad = $converBytes / 1099511627776;
          echo $cantidad." ".$from." equivale a ".$ConvertirUnidad." ".$to;
        break; 
    }
  }
  }
}

class Hija extends Padre{
}

$prueba = new Hija;
$prueba->Convertir();

?>
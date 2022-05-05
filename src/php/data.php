<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/tablet.css" media="(min-width:768px)">
    <link rel="stylesheet" href="../css/compu.css" media="(min-width:1024px)">
    <title>Conversor</title>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button{
        -webkit-appearance: none;
        margin: 0;
  }
</style>
</head>
<body>
    <header>
        <div class="header__title-container">
            <h1>Conversor de Unidades</h1>
        </div>
        <div class="header__subtitle-container">
            <p>¿Qué unidad deseas convertir?</p>
        </div>
    </header>
    <main>
        <section id="conversor" class="main__conversor">
            <div class="conversor__title">
                <h2>Escoge la unidad de medida que necesitas.</h2>
            </div>
            <section class="conversor__container-slider">
                <article class="conversor__container-card">
                    <p class="unitie">Datos</p>
                    <div class="conversor__info-container">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <div class="conversor__data">
                            <label for="" class="conversor__card-title">Ingresa el valor y selecciona la unidad a convertir</label>

                            <!-- CANTIDAD -->
                                <input class="conversor__data-input" type="number" name='cantidad' value='' required step="any">

                            <!-- F R O M -->
                                <select name='from_unit' class="conversor__data-cantidades" value='from_unit'>
                                    <option value="" selected>Unidades</option>
                                    <option value="Bytes">Bytes</option>
                                    <option value="Kilobytes">Kilobytes</option>
                                    <option value="Megabytes">Megabytes</option>
                                    <option value="Gigabytes">Gigabytes</option>
                                    <option value="Terabytes">Terabytes</option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <h3 class="conversor__card-subtitle">Selecciona la unidad a convertir</h3>
                            <div class="conversor__options-container">
                                
                                <!-- T O -->
                                <select name='to_unit' class="conversor__options-cantidades" value='to_unit'>
                                    <option value="" selected>Unidades</option>
                                    <option value="Bytes">Bytes</option>
                                    <option value="Kilobytes">Kilobytes</option>
                                    <option value="Megabytes">Megabytes</option>
                                    <option value="Gigabytes">Gigabytes</option>
                                    <option value="Terabytes">Terabytes</option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <h3 class="conversor__card-subtitle">¡Convierte!</h3>
                        <div class="conversor__button-container">
                            <input type="submit" name='enviar' value="CONVERTIR">
                        </div>
                        <div class="conversor__answer-container">
                            <h3 class="conversor__answer-data"> <br>
                            
<?php
class Hija{
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

$prueba = new Hija;
$prueba->Bytes();
$prueba->KiloBytes();
$prueba->MegaBytes();
$prueba->GigaBytes();
$prueba->TeraBytes();
?>

                            </h3>
                        </div>
                        </form>
                        
                    </div>
                </article>
            </section>
        </section>
    </main>
    <footer>
        <section class="left">
            <ul>
                <li>Hecho por:</li>
                <li><a href="">Katherine Chavarria</a></li>
                <li><a href="">Jonathan Sifontes</a></li>
                <li><a href="">Katy</a></li>
                <li><a href="">José Flores</a></li>
            </ul>
        </section>
        <section class="right">
            <img src="" alt="">
        </section>
    </footer>
</body>
</html>



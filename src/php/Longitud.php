<?php
require_once('Unidades.php'); 
require_once('functions.php'); 

class Longitud extends Unidades implements UnidadesInterface {

    public function convert_to($value, $from_unit) {
        if(array_key_exists($from_unit, LENGTH_TO_METER)) {
            return $value * LENGTH_TO_METER[$from_unit];
        } else {
            return "Unsupported unit.";
        }
    }
        
    public function convert_from($value, $to_unit) {
        if(array_key_exists($to_unit, LENGTH_TO_METER)) {
            return $value / LENGTH_TO_METER[$to_unit];
        } else {
            return "Unsupported unit.";
        }
    }
    
    function convert_length($value, $from_unit, $to_unit) {
        $meter_value = convert_to($value, $from_unit);
        $new_value = convert_from($meter_value, $to_unit);
        return $new_value;
    }
}

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {
    $from_value = $_POST['from_value'];
    $from_unit = $_POST['from_unit'];
    $to_unit = $_POST['to_unit'];
    
    $to_value = convert_length($from_value, $from_unit, $to_unit);
}

$length_options = array(

    "millimeters", 
    "centimeters" ,
    "meters" ,
    "kilometers",
    "miles",
);

const LENGTH_TO_METER = array(
    
    "millimeters" => 0.001,
    "centimeters" => 0.01,
    "meters" => 1,
    "kilometers" => 1000,
    "miles" => 1609.344,
    
);

?>

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
                <h2>Escoge la unidad de medida que necesitas.<h2>
            </div>
            <section class="conversor__container-slider">
                <article class="conversor__container-card">
                    <p class="unitie">Datos</p>
                    <div class="conversor__info-container">
                        <h3 class="conversor__card-title">Ingresa el valor y selecciona la unidad a convertir</h3>
                        <form action="" method="post">
                            <div class="conversor__data">
                                <input type="text" id="cantidades" class="conversor__data-input" name="category">
                                <select name="" id="cantidades" class="conversor__data-cantidades">
                                    <option selected>Unidades</option>
                                    <option value   =   "inches"    <?php if($from_unit == 'inches') { echo " selected"; } ?>>inches</option>
                                    <option value   =   "feet"      <?php if($from_unit == 'feet') { echo " selected"; } ?>>feet</option>
                                    <option value   =   "yards"     <?php if($from_unit == 'yards') { echo " selected"; } ?>>yards</option>
                                    <option value   =   "miles"     <?php if($from_unit == 'miles') { echo " selected"; } ?>>miles</option>
                                    <option value   =   "centimeters"<?php if($from_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
                                    <option value   =   "meters"    <?php if($from_unit == 'meters') { echo " selected"; } ?>>meters</option>
                                    <option value   =   "kilometers"<?php if($from_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
                                </select>
                            </div>
                            <h3 class="conversor__card-subtitle">Selecciona la unidad a convertir</h3>
                            <div class="conversor__options-container">
                                <select name="" id="" class="conversor__options-cantidades">
                                    <option selected>Unidades</option>
                                    <option value   =   "inches"    <?php if($from_unit == 'inches') { echo " selected"; } ?>>inches</option>
                                    <option value   =   "feet"      <?php if($from_unit == 'feet') { echo " selected"; } ?>>feet</option>
                                    <option value   =   "yards"     <?php if($from_unit == 'yards') { echo " selected"; } ?>>yards</option>
                                    <option value   =   "miles"     <?php if($from_unit == 'miles') { echo " selected"; } ?>>miles</option>
                                    <option value   =   "centimeters"<?php if($from_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
                                    <option value   =   "meters"    <?php if($from_unit == 'meters') { echo " selected"; } ?>>meters</option>
                                    <option value   =   "kilometers"<?php if($from_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
                                </select>
                            </div>
                        </form>
                        <h3 class="conversor__card-subtitle">¡Convierte!</h3>
                        <div class="conversor__button-container">
                            <button class="conversor__button">
                                Convertir
                            </button>
                        </div>
                        <div class="conversor__answer-container">
                            <h3 class="conversor__answer-data"> 
                                Tus "Datos ingresados" equivalen a "Datos convertidos
                            </h3>
                        </div>
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
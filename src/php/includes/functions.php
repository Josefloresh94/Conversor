<?php
/*
const LENGTH_TO_METER = array(
    "inches" => 0.0254,
    "feet" => 0.3048,
    "yards" => 0.9144,
    "miles" => 1609.344,
    "millimeters" => 0.001,
    "centimeters" => 0.01,
    "meters" => 1,
    "kilometers" => 1000,
    "acres" => 63.614907234075,
    "hectares" => 100,
    "nautical_miles" => 1852
);

const VOLUME_TO = array(
    
    "milímetro cubico" => 0.000000001,
    "centímetro cubico" => 0.000001 ,
    "decímetro cubico" =>0.001,
    "metro cubico" => 1,
    "kilómetro cubico" => 1000000000,
);  

const MASS_TO_KILOGRAM = array(
    "ounces" =>	0.0283495,
    "pounds" =>	0.453592,
    "stones" =>	6.35029,
    "long_tons" =>	1016.05,
    "short_tons" =>	907.185,
    "milligrams" =>	0.000001,
    "grams" =>	0.001,
    "kilograms" =>	1,
    "metric_tonnes" =>	1000
);


function optionize($string) {
    return str_replace(' ', '_', strtolower($string));
}


function float_to_string($float, $precision=10) {
    $float = (float) $float;
    $string = number_format($float, $precision, '.', '');
    $string = rtrim($string, '0');
    $string = rtrim($string, '.');
    return $string;
}

// Length
function convert_to_meters($value, $from_unit) {
    if(array_key_exists($from_unit, LENGTH_TO_METER)) {
        return $value * LENGTH_TO_METER[$from_unit];
    } else {
        return "Unsupported unit.";
    }
}

function convert_from_meters($value, $to_unit) {
    if(array_key_exists($to_unit, LENGTH_TO_METER)) {
        return $value / LENGTH_TO_METER[$to_unit];
    } else {
        return "Unsupported unit.";
    }
}

function convert_length($value, $from_unit, $to_unit) {
    $meter_value = convert_to_meters($value, $from_unit);
    $new_value = convert_from_meters($meter_value, $to_unit);
    return $new_value;
}

// Area
function convert_to_square_meters($value, $from_unit) {
    $from_unit = str_replace('square_', '', $from_unit);
    if(array_key_exists($from_unit, LENGTH_TO_METER)) {
        return $value * pow(LENGTH_TO_METER[$from_unit], 2);
    } else {
        return "Unsupported unit.";
    }
}
    
function convert_from_square_meters($value, $to_unit) {
    $to_unit = str_replace('square_', '', $to_unit);
    if(array_key_exists($to_unit, LENGTH_TO_METER)) {
        return $value / pow(LENGTH_TO_METER[$to_unit], 2);
    } else {
        return "Unsupported unit.";
    }
}

function convert_area($value, $from_unit, $to_unit) {
    $meter_value = convert_to_square_meters($value, $from_unit);
    $new_value = convert_from_square_meters($meter_value, $to_unit);
    return $new_value;
}


// Volume
function convert_to_liters($value, $from_unit) {
    if(array_key_exists($from_unit, VOLUME_TO_LITER)) {
        return $value * VOLUME_TO_LITER[$from_unit];
    } else {
        return "Unsupported unit.";
    }
}
    
function convert_from_liters($value, $to_unit) {
    if(array_key_exists($to_unit, VOLUME_TO_LITER)) {
        return $value / VOLUME_TO_LITER[$to_unit];
    } else {
        return "Unsupported unit.";
    }
}

function convert_volume($value, $from_unit, $to_unit) {
    $liter_value = convert_to_liters($value, $from_unit);
    $new_value = convert_from_liters($liter_value, $to_unit);
    return $new_value;
}
*/

// Mass
class Masa {

public $tonelada = 1000000;
public $kilogramo = 1000;
public $libra = 453.59;
public $gramo = 1;
public $miligramo = 0.001;
public $milligramo = 0.000001;
public $enviar;
public $cantidad;
public $from;
public $to;
//FUNCION DE CONVERTIR
public function Convertir(){
    if (isset ($_POST["enviar"])) {
    $this->cantidad = $_POST ["cantidad"];
    $this->from = $_POST ["from_unit"];
    $this->to = $_POST ["to_unit"];
    if ($this->from=="mc" & $this->to=="mc") {
        echo "MC a MC";
    }
    if ($this->from=="mc" & $this->to=="ml") {
        echo "MC a ML";
    }
    if ($this->from=="mc" & $this->to=="gr") {
        echo "MC a GR";
    }
    if ($this->from=="mc" & $this->to=="lb") {
        echo "MC a LB";
    }
    if ($this->from=="mc" & $this->to=="kg") {
        echo "MC a KG";
    }
    if ($this->from=="mc" & $this->to=="tn") {
        echo "MC a TN";
    }
    }
}
}
//crear objeto
$Conversion = new Masa;
$Conversion -> Convertir();
/*
// Speed
function convert_speed($value, $from_unit, $to_unit) {
    if($from_unit == 'knots') { $from_unit = 'nautical_miles_per_hour'; }
    if($to_unit == 'knots') { $to_unit = 'nautical_miles_per_hour'; }

    list($from_dist, $from_time) = explode('_per_', $from_unit);
    list($to_dist, $to_time) = explode('_per_', $to_unit);
    
    if($from_time == 'hour') { $value /= 3600; }
    $value = convert_length($value, $from_dist, $to_dist);
    if($to_time == 'hour') { $value *= 3600; }

    return $value;
}

    // Temperature
function convert_to_celsius($value, $from_unit) {
    switch($from_unit) {
        case 'celsius':
        return $value;
        break;
        case 'fahrenheit':
        return ($value - 32) / 1.8;
        break;
        case 'kelvin':
        return $value - 273.15;
        break;
        default:
        return "Unsupported unit.";
    }
}

function convert_from_celsius($value, $to_unit) {
    switch($to_unit) {
        case 'celsius':
        return $value;
        break;
        case 'fahrenheit':
        return ($value * 1.8) + 32;
        break;
        case 'kelvin':
        return $value + 273.15;
        break;
        default:
        return "Unsupported unit.";
    }
}

function convert_temperature($value, $from_unit, $to_unit) {
    $celsius_value = convert_to_celsius($value, $from_unit);
    $new_value = convert_from_celsius($celsius_value, $to_unit);
    return $new_value;
}
*/
?>

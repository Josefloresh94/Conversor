<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/tablet.css" media="(min-width:768px)">
    <link rel="stylesheet" href="../../css/compu.css" media="(min-width:1024px)">
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
                        <form action="" method="post">
                            <div class="conversor__data">
                            <label for="" class="conversor__card-title">Ingresa el valor y selecciona la unidad a convertir</label>

                            <!-- CANTIDAD -->
                                <input class="conversor__data-input" type="number" name='cantidad' value='' step="any" title="Ingrese el valor de datos en números" required autofocus>

                            <!-- F R O M (PONER NAME A SELECT Y VALUE A OPTION)-->
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
                                
                                <!-- T O (PONER NAME A SELECT Y VALUE A OPTION)-->
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
                            <input class="conversor__button" type="submit" name='enviar' value="CONVERTIR">
                        </div>
                        <div class="conversor__answer-container">
                            <h3 class="conversor__answer-data"> <br>
                            
   <!-- acá poner código php -->                         
   <?php 
   include_once 'data_codigo_clase.php'; 
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



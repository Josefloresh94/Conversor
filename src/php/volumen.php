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
                    <p class="unitie">Volumen</p>
                    <div class="conversor__info-container">
                        <h3 class="conversor__card-title">Ingresa el valor y selecciona la unidad a convertir</h3>
                        <form action="" method="post">
                            <div class="conversor__data">
                                <input type="text" id="cantidades" class="conversor__data-input" name="category">
                                <select name="" id="cantidades" class="conversor__data-cantidades">
                                    <option selected>Unidades</option>
                                    <option value="Longitud"<?php if($from_unit == '') { echo " selected"; } ?>>Longitud</option>
                                    <option value="Masa"<?php if($from_unit == '') { echo " selected"; } ?>>Masa</option>
                                    <option value="Volumen"<?php if($from_unit == '') { echo " selected"; } ?>>Volumen</option>
                                    <option value="Datos"<?php if($from_unit == '') { echo " selected"; } ?>>Datos</option>
                                    <option value="Moneda"<?php if($from_unit == '') { echo " selected"; } ?>>Moneda</option>
                                    <option value="Tiempo"<?php if($from_unit == '') { echo " selected"; } ?>>Tiempo</option>
                                </select>
                            </div>
                            <h3 class="conversor__card-subtitle">Selecciona la unidad a convertir</h3>
                            <div class="conversor__options-container">
                                <select name="" id="" class="conversor__options-cantidades">
                                    <option selected>Unidades</option>
                                    <option value="Longitud">Longitud</option>
                                    <option value="Masa">Masa</option>
                                    <option value="Volumen">Volumen</option>
                                    <option value="Datos">Datos</option>
                                    <option value="Moneda">Moneda</option>
                                    <option value="Tiempo">Tiempo</option>
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
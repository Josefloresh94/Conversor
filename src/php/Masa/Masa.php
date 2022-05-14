<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/tablet.css" media="(min-width:768px)">
    <link rel="stylesheet" href="../../css/compu.css" media="(min-width:1024px)">
    <title>Masa</title>

</head>
<body>
    <header>
        <div class="header__title-container">
            <h1>Conversor de Unidades</h1>
        </div>
        <div class="header__subtitle-container">
            <p>MASA</p>
        </div>
    </header>
    <main>
        <section id="conversor" class="main__conversor">
            <section>
                <article class="conversor__container-card">
                    <!-- <p class="unitis">Datos</p> -->
                    <div class="conversor__info-container">
                        <h3 class="conversor__card-title">Ingresa el valor y selecciona la unidad a convertir</h3>
                        <form action="" method="post">
                            <div class="conversor__data">

                            <!-- CANTIDAD INGRESADA POR USUARIO-->
                                <input class="conversor__data-input" type="number" name='cantidad' value='' step="any" title="Ingrese el valor de datos en números" required autofocus oninvalid="this.setCustomValidity('Por favor ingrese la cantidad a convertir')">

                            <!-- UNIDAD DE ORIGEN ELEGIDA POR USUARIO-->
                                <select name='from_unit' class="conversor__data-cantidades" value='from_unit' required oninvalid="this.setCustomValidity('Por favor seleccione la unidad de origen')" oninput="setCustomValidity('')" >
                                    <option value selected>Unidades</option>
                                    <option value="Microgramo">Microgramo</option>
                                    <option value="Miligramo">Miligramo</option>
                                    <option value="Gramo">Gramo</option>
                                    <option value="Kilogramo">Kilogramo</option>
                                    <option value="Tonelada">Tonelada</option>
                                </select>
                            </div>
                            <h3 class="conversor__card-subtitle">Selecciona la unidad a convertir</h3>
                            <div class="conversor__options-container">
                                
                                <!-- UNIDAD DE DESTINO ELEGIDA POR USUARIO-->
                                <select name='to_unit' class="conversor__options-cantidades" value='to_unit' required oninvalid="this.setCustomValidity('Por favor seleccione la unidad de destino')" oninput="setCustomValidity('')">
                                    <option value selected>Unidades</option>
                                    <option value="Microgramo">Microgramo</option>
                                    <option value="Miligramo">Miligramo</option>
                                    <option value="Gramo">Gramo</option>
                                    <option value="Kilogramo">Kilogramo</option>
                                    <option value="Tonelada">Tonelada</option>
                                </select>
                            </div>
                            <h3 class="conversor__card-subtitle">¡Convierte!</h3>
                            <div class="conversor__button-container">
                                <button class="conversor__button" name='enviar'>CONVERTIR</button>
                            </div>
                            <div class="conversor__answer-container">
                                <h3 class="conversor__answer-data">
                                    <br>
                                    <!-- acá poner código php -->                         
                                    <?php 
                                        include 'CapturaDatos.php';
                                    ?>
                                </h3>
                            </div>
                        </form>
                    </div>
                </article>
            </section>
            <section class="backHome">
                <a class="backHome__button" href="../../../index.html">Home</a>
            </section>
            
        </section>
    </main>
    <footer>
        <section class="left">
            <ul>
                <li>Hecho por:</li>
                <li><a href="">Katherine Chavarria</a></li>
                <li><a href="">Jonathan Sifontes</a></li>
                <li><a href="">Katya Hernandez</a></li>
                <li><a href="">José Flores</a></li>
            </ul>
        </section>
        <section class="right">
            <img src="../../../assets/Kodigo.png" alt="">
        </section>
    </footer>
</body>
</html>
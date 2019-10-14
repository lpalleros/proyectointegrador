<?php
session_start();
include_once("nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="ESTILO/main.css">


    <title>FAQ</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row preguntasFaq">
            <img id="imagenFaq" class="" src="IMAGENES\FAQ.png" alt="">

            <h2 class="col-12">PREGUNTAS FRECUENTES</h2>
            <h3 class="offset-1 col-11">CÓMO COMPRO UN PRODUCTO?</h3>
            <p class="offset-1 col-10">Una vez elegido el producto que desea comprar, deberá apretar el botón "Comprar" y automáticamente se ubicará en el carrito de compra donde usted podrá confirmar y elegir el método de pago.</p>
            <br>
            <h3 class="offset-1 col-11">CÓMO PAGO UN PRODUCTO?</h3>
            <p class="offset-1 col-10">Dependiendo de como lo quiera pagar, seleccionará un método y procederá a completar el formulario de compra con sus datos.</p>
            <br>
            <h3 class="offset-1 col-11">QUÉ MÉTODOS DE PAGO ACEPTAN?</h3>
            <p class="offset-1 col-10">En este momento aceptamos mercado pago, transferencia o deposito bancario y efectuvi en nuestra tienda física.</p>
            <br>
            <h3 class="offset-1 col-11">CÓMO RECIBIR O RETIRAR UN PRODUCTO?</h3>
            <p class="offset-1 col-10">Al comprar el producto se le preguntara su método de envío, donde podrá sekeccuonar el que quiera.</p>
            <br>
            <h3 class="offset-1 col-11">DÓNDE PUEDO RETIRAR UN PRODUCTO?</h3>
            <p class="offset-1 col-10">Puede retirar su producto en nuestras oficinas en Flores o directo del depósito (ver contacto).</p>
            <br>
            <h3 class="offset-1 col-11">TENGO UN CUPÓN DE COMPRA, CÓMO LO UTILIZO?</h3>
            <p class="offset-1 col-10"> En caso de tener un cupón debe ingresarlo en el sector de cupones dentro del carruto de compras y asó obtendrá el descuento correspondiente.</p>
            <br>
            <h3 class="offset-1 col-11">LOS PRODUCTOS TIENEN GARANTÍA?</h3>
            <p class="offset-1 col-10">Todos nuestros productos cuentan con garantía de un año por daños de fábrica. <br>
            No habrá garantía para desperfectos provocados por el mal uso del monopatín. </p>
            <br>
            <h3 class="offset-1 col-11">TIENEN SERVICE DE REPARACIÓN?</h3>
            <p class="offset-1 col-10">Si, contamos con un taller especializado en reparacones de nuestros productos en caso de desperfectos. El mismo tiene un costo adicional que dependerá de la reparacion a realizar.</p>

            <div class="col-12 dudas">
            <p>TENÉS MÁS DUDAS? <br> CONTACTATE CON NOSOTROS! </p>
            </div>

        </div>

        <footer class="row">
            <section class="col-md-7 col-xs-12  row listas">
                <article class="col-md-2 col-xs-12">
                    <a href="#"><h5>Tienda</h5></a>
                    <ul>
                        <li><a href="#">Monopatines</a></li>
                        <li><a href="#">Accesorios</a></li>
                    </ul>
                </article>
                <article class="col-md-2 col-xs-12">
                    <a href="faq.html"><h5>Faq</h5></a>
                </article>

                <article class="col-md-2 col-xs-12">
                    <a href="mailto:contacto@rollin.com"><h5>Contacto</h5></a>
                </article>
            </section>
            <section class="col-md-5  col-xs-12 row logo">
                <article class="col-12">
                    <a href="index.html"><h5>ROLLIN'</h5></a>
                    <a href="https://goo.gl/maps/x6Stu22dYpuu1bjT8" target="_blank"><p>Av. Lorem Ipsum Dolor 2563 - Winterfeld - Narnia</p></a>
                </article>
            </section>

        </footer>
    </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

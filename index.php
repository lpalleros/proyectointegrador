
<?php
session_start();
setCookie("prueba","Hola");
//setCookie("username","lucas");
include_once("nav.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rollin - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="ESTILO/main.css">
</head>
<body>


    <!--
    <header>

    </header>
    -->
    <div class="container-fluid">
        <div class="row portadaHome">
            <div class="col-md-12 bienvenidaHome">
                <h2>¡CONOCÉ NUESTROS MONOPATINES! </h2>

            </div>
            <div class="botonLinkPrimario">
                    <a class="col-12" href="#">IR A LA TIENDA</a>
                </div>
        </div>
        <div class="row listArticulos">
            <section class="imagenesProductos col-lg-7 col-xs-12 row">
             <article class="col-lg-6 col-xs-12">
                 <img src="IMAGENES\1.png" width="100%" alt="">
             </article>
             <article class="col-lg-6 col-xs-12">
                <img src="IMAGENES\4.png" width="100%" alt="">
             </article>
             <article class="col-lg-6 col-xs-12">
                <img src="IMAGENES\2.png" width="100%" alt="">
             </article>
             <article class="col-lg-6 col-xs-12">
                <img src="IMAGENES\3.png" width="100%" alt="">
             </article>
            </section>
            <section class="promoDelMes col-md-5  col-xs-12 row">
                <h2 class="col-12">20% OFF<br>EN TODO EL SITIO!</h2>
                <div class="botonLinkSecundario">
                    <a class="col-12" href="#">IR A LA TIENDA</a>
                </div>
            </section>
        </div>
        <div class="row newslater">
            <section class="col-lg-7 col-xs-12  row">
             <article class="col-lg-12 col-xs-12">
                 <h2 style="text-align: left">QUERÉS ENTERARTE DE NOVEDASDES Y OFERTAS EXCLUSIVAS? <br>
                 SUSCRIBITE A NUESTRO NEWSLETTER!</h2>
             </article>
            </section>
            <section class="formularioNews col-md-5  col-xs-12 row">
                <form class="col-12 row">
                    <div class="col-11" style="padding: 0;" >
                        <input type="email" class="form-control" placeholder="  e-mail">
                    </div>
                    <div class="col-1" >
                        <button  type="submit" class="btn">ENVIAR</button>
                    </div>
                </form>
            </section>
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

<?php

$navItems =
[
    0 => [
      "name" => "Entrar",
      "url" => "login.php",
    ],
    1 => [
      "name" => "Registrase",
      "url" => "registro.php",
    ],
];
?>
<!-- NAVBAR  -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-toggleable-md ">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="IMAGENES/LOGO FONDO TRANSPARENTE.png" width="120px" id="logo">
      </a>
      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#Content" aria-controls="Content" aria-expanded="false" aria-label="Toggle navigation" id="toggleButton">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="Content" >

        <ul class="nav navbar-nav ml-auto">
          <?php foreach ($navItems as $item) :?>
            <?php if (isset($_SESSION["username"])): ?>
              <li class="nav-item">
                <p >Bienvenido, <?=$_SESSION["username"]?></p>
                <p>
                  <a href="cerrar_sesion.php" class="nav-link">Cerrar sesión</a>
                </p>
              </li>

              <?php break;?>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link" href="<?=$item['url']?>">
                  <?= $item["name"]?>
                </a>
              </li>
            <?php endif; ?>

          <?php endforeach ;?>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="IMAGENES/VECTOR MOCHILA.png" width="30px" id="logo">
            </a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
  <!-- FINAL DEL NAVBAR  -->

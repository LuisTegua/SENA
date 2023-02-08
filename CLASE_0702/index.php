<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/modern-normalize.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>SENA</title>
</head>

<body>
  <header>
    <h1 class="title">ADSO</h1>
    <nav class="nav">
      <ul class="nav__list">
        <li class="nav__item"><a class="nav__link" href="#">Contactos</a></li>
        <li class="nav__item"><a class="nav__link" href="#">contactenos</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <?php
    include('./view/contact.php');
    ?>
  </main>
  <footer>
    <span>SENA CDA CHIA &copy; 2023</span>
    <span>Derechos reservados</span>
  </footer>
</body>

</html>
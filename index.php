 <?php include 'extend/header.php'?>

<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/car1.jpg" class="d-block w-100" alt="..." width="640" height="560">
    </div>
    <div class="carousel-item">
      <img src="img/car2.jpg" class="d-block w-100" alt="..." width="640" height="560">
    </div>
    <div class="carousel-item">
      <img src="img/car3.jpg" class="d-block w-100" alt="..."width="640" height="560">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><!--aqui cierra el carrousel-->
<p><p>
<section id="main" class="row">
  <!-- Contenido principal a la izquierda -->
  <div class="col-xs-12 col-sm-8 col-md-8">
    <div class="container p-4 bg-dark text-light rounded shadow">
      <h2 class="text-center mb-4">BIENVENIDO</h2>
      
      <p></p>
        <p>
            Joji, cuyo nombre real es <strong>George Kusunoki Miller</strong>, es un cantante, compositor y productor musical de origen japonés-australiano. 
            Su trayectoria artística es única, pues pasó de ser un creador de contenido en internet bajo el nombre de <strong>Filthy Frank</strong> a convertirse en 
            una de las figuras más influyentes del <strong>R&B alternativo y lo-fi</strong>
        </p>
        <p>
            Desde su debut musical, Joji ha cautivado al público con su estilo melancólico, letras introspectivas y producción envolvente. 
            Con álbumes como <em>BALLADS 1</em> y <em>Nectar</em>, ha consolidado su posición en la industria musical, explorando temas de amor, 
            desamor y la complejidad de las emociones humanas.
        </p>
        <p>
            En esta página encontrarás un recorrido por su <strong>historia</strong>, desde sus inicios en YouTube hasta su evolución como artista, 
            así como una detallada <strong>discografía</strong> con enlaces a sus canciones.
        </p>
        <p>
            
        </p>

      <p class="text-center fw-bold">Descubre más sobre Joji y sumérgete en su mundo musical. 🎵✨</p>
    </div>
  </div>

  <!-- Redes sociales a la derecha -->
  <div class="col-xs-12 col-sm-4 col-md-4">
    <div class="container p-4 bg-light rounded shadow">
      <h4 class="text-center mb-3 text-dark">Redes sociales</h4>

      <div class="list-group text-center">
        <a href="https://www.youtube.com/@joji" target="_blank" class="list-group-item list-group-item-action list-group-item-dark">
          <strong>🎥 YOUTUBE</strong>
        </a>
        <a href="https://www.facebook.com/joji" target="_blank" class="list-group-item list-group-item-action list-group-item-primary">
          <strong>📘 FACEBOOK</strong>
        </a>
        <a href="https://www.instagram.com/joji" target="_blank" class="list-group-item list-group-item-action list-group-item-danger">
          <strong>📸 INSTAGRAM</strong>
        </a>
        <a href="https://twitter.com/joji" target="_blank" class="list-group-item list-group-item-action list-group-item-info">
          <strong>🐦 TWITTER</strong>
        </a>
      </div>
    </div>
    
  </div>
</section>


<?php include 'extend/footer.php'?>

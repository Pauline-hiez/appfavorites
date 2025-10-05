<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Accueil</title>
</head>
<body>

<?php require_once "assets/header.php" ; ?>
<?php require_once "assets/navbar.php"; ?>

<main>

<div class="carousel">
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active slide" data-bs-interval="10000">
      <img src="assets/img/youtube.jpg" class="d-block w-100" alt="youtube">
      <div class="carousel-caption d-none d-md-block">
        <div class="bloc-text">
        <h5>Youtube</h5>
        <p>L'application de vidéos.</p>
      </div>
    </div>
    </div>
    <div class="carousel-item slide" data-bs-interval="2000">
      <img src="assets/img/canal.webp" class="d-block w-100" alt="canal">
      <div class="carousel-caption d-none d-md-block">
        <div class="bloc-text">
        <h5>Canal plus</h5>
        <p>Grand choix de contenus : Films, séries, documentaires et même replay et tv en direct.</p>
      </div>
      </div>
    </div>
    <div class="carousel-item slide">
      <img src="assets/img/whatsapp.jpg" class="d-block w-100" alt=".whatsapp">
      <div class="carousel-caption d-none d-md-block">
        <div class="bloc-text">
        <h5>WhatsApp</h5>
        <p>L'application pour communiquer avec votre famille et vos amis, partout dans le monde.</p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div> 

</main>

<?php require_once "assets/footer.php" ; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
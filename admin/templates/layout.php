<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title><?= $title ?></title>
</head>
<style>





</style>
<body>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ">
      <a class="navbar-brand" href="#">Meca express - Gestion </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?page=dashboard">Accueil</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="index.php?page=management_admin">Admin</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="index.php?page=management_car_brand">Marque voiture</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="index.php?page=management_category">Catégorie</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="index.php?page=management_all_rate">Tarifs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=management_gallery_picture">Galerie photo</a>
          </li>
        </ul>
        <span class="navbar-text">
              <a  class="nav-link" href="index.php?action=signout">Se déconnecter </a>
        </span>
      </div>
    </div>
  </nav>

<main>
    <?= $content ?>
</main> 












</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../image/logo.JPG" type="image/x-icon">
    <script src="https://kit.fontawesome.com/962e0fbbfc.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="../css/layout.css" rel="stylesheet" type="text/css">
    <title><?= $title ?></title>
</head>
<body>

	<nav class="navbar sticky-top navbar-expand-lg mynav ">
		<div class="container-fluid">
		  <a class="navbar-brand" href="index.php?page=homepage"><img src="../image/logo.webp"  class="rounded " alt="logo Meca express woustviller"></a>
		  <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link active testedeux" aria-current="page" href="index.php?page=homepage">Accueil</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="index.php?page=ourGarage">Notre Garage</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="index.php?page=maintenance">Entretien</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="index.php?page=allRate">Tarifs</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="index.php?page=foundUs">Nous trouver</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="index.php?page=galleryPicture">Galerie Photo</a>
			  </li>
			</ul>

		  </div>
		</div>
	  </nav>
	  


	<main>
	<?= $content ?>
	</main>




    
	<footer class="py-4">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="footer-item">
              <h4>Méca Express</h4>
              <hr>
              <p>6 Rue de Nancy <br>57915 Woustviller <br> <strong>06 46 88 38 66 </strong> </p>
            </div>
        </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer-item">
          <h4>Horaire</h4>
          <hr>
          <p><strong class="open rounded-5 text-center">Lundi - Jeudi</strong> <span class="time">: 09h30 - 12h00 14h00 - 18h00 </span> </p>
          <p><strong class="open rounded-5 text-center">Vendredi</strong><span class="time"> : 09h30 - 12h00 14h00 - 17h30 </span> </p>
          <p><strong class="open rounded-5 text-center">Sam - Dim</strong><span class="time"> : Fermé </span> </p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer-item">
          <h4>Navigation</h4>
          <hr>
          <ul class="list-unstyled">
            <li><a href="index.php?page=homepage">Accueil</a></li>
            <li><a href="index.php?page=ourGarage">Notre Garage</a></li>
            <li><a href="index.php?page=maintenance">Entretien</a></li>
            <li><a href="index.php?page=allRate">Tarifs</a></li>
			      <li><a href="index.php?page=foundUs">Nous trouver</a></li>
            <li><a href="index.php?page=galleryPicture">Galerie Photo</a></li>
            <li><a href="index.php?page=legalNotice">Mention Legal</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer-item">
          <h4 class="réseau">Réseau sociaux</h4>
          <hr>
          <ul class="list-inline">
            <li class="list-inline-item bgface">
                <a href="https://www.facebook.com/mecaexpress/?locale=fr_FR">
                    <div class="facebook-circle">
                        <i class="fab fa-facebook fa-2x facebook" style="color: #2e5dad;"></i>
                    </div>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>




</body>
</html>


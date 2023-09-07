<?php ob_start(); ?>
<link href="../css/maintenance.css" rel="stylesheet" type="text/css">
<title><?= $title ?></title>
<meta name="description" content="Page notre garage du site Meca express">
<meta name="keywords" content="garage mécanique, garage, automobile, méca express woustviller">
<body>



  <div class="container-fluid text-center py-5 backgroundh">
    <h1>ENTRETIEN</h1>
    <h2>Nos prestation</h2> 
</div>




<div class="container py-5">
<div class="row ">
  <div class="col-md-6 py-3 ">
    <div class="card border-0 p-3 h-100 rounded-5 teste backgrlist">
      <div class="card-body">
        <h3 class="card-title">Entretien réparation</h3>
        <hr>
        <ul class="list-unstyled lis">
            <li class="li">Allumage et gestion moteur</li>
            <li class="li">Pneumatiques</li>
            <li class="li">Entretien auto - Révision vidange</li>
            <li class="li">Freinage - disques & plaquettes</li>
            <li class="li">Distribution</li>
            <li class="li">Diagnostic électronique</li>
            <li class="li">Échappement</li>
            <li class="li">Amortisseurs</li>
            <li class="li">Embrayage</li>
            <li class="li">Batterie - Alternateur - Démarreur</li>
            <li class="li">Géométrie</li>
            <li class="li">Contrôle technique</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-6 py-3  rounded-5">
        <div id="carouselExample" class="carousel slide h-100 rounded-5 teste backgrlist" data-bs-ride="carousel">
          <div class="carousel-inner h-100   rounded-5">
            <div class="carousel-item active h-100  rounded-5">
              <img src="../image/maintecance1.webp" class="d-block w-100 h-100 rounded-5 object-fit-cover " alt="Image 1" >
            </div>
            <div class="carousel-item h-100  rounded-5">
              <img src="../image/maintenance2.webp" class="d-block w-100 h-100 rounded-5 object-fit-cover " alt="Image 2" >
            </div>
            <div class="carousel-item h-100  rounded-5">
              <img src="../image/maintenance3.webp" class="d-block w-100 h-100 rounded-5 object-fit-cover " alt="Image 3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
  </div>
</div>
</div>















</body>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>

</html>
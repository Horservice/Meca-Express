<?php ob_start(); ?>
<link href="../css/our_garage.css" rel="stylesheet" type="text/css">
<title><?= $title ?></title>
<meta name="description" content="Page notre garage du site Meca express">
<meta name="keywords" content="garage mécanique, notre garage, automobile, méca express woustviller">
<body>

<div class="container-fluid text-center bg py-5 mb-5">
    <h1>Qui nous sommes ?</h1>
  </div>

  <div class="container my-5">
    <div class="row g-0 position-relative backshadow rounded">
      <div class="col-md-6 mb-md-0 p-md-4 pictureopacity">
        <img src="../image/our_garage1.webp" class="img-fluid rounded hw" alt="Photo du devant du garage avec une voiture a l'extérieur">
      </div>  
      <div class="col-md-6 p-4 ps-md-0">
        <h2 class="mt-0 title">Méca express</h2>
        <hr class="w-75 hrl">
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <h3 class="mt-0 title">Alexandre FRITZ</h3>
        <hr class="w-75 hrl">
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
      </div>
    </div>
  </div>


  

</body>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>
</html>
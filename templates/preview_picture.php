<?php ob_start(); ?>
<link href="../css/preview_picture.css" rel="stylesheet" type="text/css">
<title><?= $title = 'Méca Express - Photo '; ?> </title>
<meta name="description" content="Page d'une photo du site Meca express">
<meta name="keywords" content="garage mécanique, garage, automobile, méca express woustviller, photo,">
<body>


    <div class="container-fluid text-center teste py-3">
    <?php
    foreach($preview_pictures as $preview_picture){?>
        <h2>Photo - <?=$preview_picture['name']?></h2>
    </div>

      <div class="container py-5 mb-5 text-end "> 
          <a class="text-end my-y mx-5 rounded-5 btYellow" href="index.php?page=galleryPicture" role="button">Retour a la Galerie Photo</a>
      </div>

    <div class="container mb-5">
      <div class="row">


        <div class="col-md-6 carousel-container">
                <img src="../uploads/<?=$preview_picture['path']?>" class="card-img hw rounded-5" alt="<?=$preview_picture['description']?>">
        </div>

              <div class="col-md-6 text-container rounded-5">
                  <h3 class="card-title"><?=$preview_picture['name']?></h3>
                  <hr>
                  <p class="card-text"><?=$preview_picture['description']?></p>
              </div>
            </div>

            <?php }?>


        </div>

    </div>


</body>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>

</html>
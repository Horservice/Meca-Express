<?php $title = "Preview Photo"; ?>
<?php ob_start(); ?>
<body>
    


<div class="container">
<?php

foreach($preview_pictures as $preview_picture){?>

	<h1>Prévisualisation de  la photo : <?=$preview_picture['name']?> </h1>

    <div class="row my-5">
    <div class="container mb-5">
            <div class="container text-end ">
              <a class="btn btn-warning my-4 mx-3 " href="index.php?page=management_gallery_picture" role="button">Retour</a>
            </div>
    
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card text-bg-dark">
                <img src="../<?=$preview_picture['path']?>" class="card-img lorem" alt="Mécanique , voiture , réparation ">
                <div class="card-img-overlay">
                </div>
              </div>
            </div>




            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title"><?=$preview_picture['name']?></h3>
                  <hr>
                  <p class="card-text"><?=$preview_picture['description']?></p>
                </div>
              </div>
            </div>

 


    <?php }?>


</div>

<?php $content = ob_get_clean(); ?> 
<?php require('layout.php') ?>

</body>
</html>
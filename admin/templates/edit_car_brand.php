<?php $title = "Modification de la marque $name"; ?>
<?php ob_start(); ?>


<body>
<div class="container">

<h1 class="h3 mb-3 fw-normal">Modificaiton de Marque voiture</h1>
	<?=$msg?>

	<form action="#" method="POST" class="row my-5" enctype="multipart/form-data">
        <div class="mb-3">
			<label for="name" class="form-label">Nom de la marque</label>
			<input type="text" class="form-control" placeholder="name" name="name" value="<?=(isset($_GET['id'])) ? $name : ''?>">
		</div>

        <div class="mb-3">
            <label for="staticEmail" class="col-sm-2 col-form-label">Photo</label>
            <div class="col-sm-10">
              <img class="w-25" src="../<?=(isset($_GET['id'])) ? $path : ''?>">
            </div>
        </div>

        
			<div class="mb-3">
                <label for="path" class="form-label">Logo</label>
                <input type="file" class="form-control"  name="photo" value="<?=(isset($_GET['id'])) ? $path : ''?>">
            </div>                                  <!-- name="photo" =  $_FILES['photo'] -->
           


		<div class="mb-3 col-3">
			<a class="btn btn-warning" href="index.php?page=management_car_brand" role="button">Retour</a>
			<button type="submit" class="btn btn-primary" name="submit">Valider</button>
		</div>
	</form>
</div>

<?php $content = ob_get_clean(); ?> 
<?php require('layout.php') ?>

</body>
</html>


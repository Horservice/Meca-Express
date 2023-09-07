<?php $title = "Modification de la photo : $name" ?>
<?php ob_start(); ?>

<body>
<div class="container">

	<h1><?=$title?></h1>
	<?=$msg?>

	<form action="#" method="POST" class="row my-5" enctype="multipart/form-data">
        <div class="mb-3">
			<label for="name" class="form-label">Nom de la photo</label>
			<input type="text" class="form-control" placeholder="Nom de la photo" name="name" value="<?=(isset($_GET['id'])) ? $name : ''?>">
		</div>

        <div class="mb-3">
			<label for="description" class="form-label">Description</label>
			<input type="text" class="form-control" placeholder="Descritpion de la photo" name="description" value="<?=(isset($_GET['id'])) ? $description : ''?>">
		</div>

        <div class="mb-3">
            <label for="Email" class="col-sm-2 col-form-label">Photo actuelle </label>
            <div class="col-sm-10">
              <img class="w-25" src="../<?=(isset($_GET['id'])) ? $path : ''?>">
            </div>
        </div>

		<div class="mb-3">
			<label for="path" class="form-label">Nouvelle Photo</label>
			<input type="file" class="form-control"  name="photo" value="<?=(isset($_GET['id'])) ? $path : ''?>">
		<div>


		<div class="mb-3 col-3">
			<a class="btn btn-warning" href="index.php?page=management_gallery_picture" role="button">Retour</a>
			<button type="submit" class="btn btn-primary" name="submit">Valider</button>
		</div>
	</form>
</div>



<?php $content = ob_get_clean(); ?> 
<?php require('layout.php') ?>

    
</body>
</html>


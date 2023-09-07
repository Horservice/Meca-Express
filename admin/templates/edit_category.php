<?php $title = "Modification d'une catégorie"; ?>
<?php ob_start(); ?>

<body>
    

<div class="container">    
    <h1 class="h3 mb-3 fw-normal">Modification de la Catégorie</h1>

        <h4><?=$msg1?><?=$msg2?></h4>

        <form action="" method="POST" class="row my-5" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="name" class="form-label">Nom de la catégorie </label>
                <input type="text" class="form-control"  name="name" value="<?=(isset($_GET['name'])) ? $name  : ''?>">
            </div>

            <div class="mb-3 col-3">
                <a class="btn btn-warning" href="index.php?page=management_category" role="button">Retour</a>
                <button type="submit" class="btn btn-primary" name="submit">Valider</button>

            </div>

        </form>
    </div>



</body>

<?php $content = ob_get_clean(); ?> 
<?php require('layout.php') ?>

</html>
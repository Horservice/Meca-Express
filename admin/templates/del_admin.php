<?php $title = "Supprimer une admin"; ?>
<?php ob_start(); ?>
<link rel="stylesheet" href="../css/delete.css"/>



<div class="container a1 text-center py-5 my-5">
<h1>Supprimer un Admin</h1>

<h4><?=$msg1?></h4>

        <form action="" method="POST" class="row my-5" enctype="multipart/form-data">

            <div class="container text-center">
                <p class="py-2 bg-warning-subtle rounded-5 my-3 py-3">Voules vous vraiment supprimer l'admin <?=$nom?> ?</p>

            </div>

            <div class="container">
                <a type="button" class="btn btn-light" href="index.php?page=management_admin">Retour</a>
                <button type="submit" class="btn btn-danger" name="submit">Confirmer</button>
            </div>

        </form>
</div>




</body>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>
</html>
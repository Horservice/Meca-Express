
<?php ob_start(); ?>
<?php $title = "Erreur !"; ?>

<body>


    <div class="container-fluid text-center">
    <h1>Une erreur et survenue !</h1>
    <button type="button" class="btn btn-secondary" href="index.php?page=homepage">Retour a la page </button>
    </div>



<?php $content = ob_get_clean(); ?>
<?php require('layout_admin.php') ?>
</body>

</html>
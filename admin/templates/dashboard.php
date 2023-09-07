<title><?= $title="Back Express - Menue principal"; ?></title>
<?php ob_start(); ?>

<body>

    <div class="container-fluid text-center py-5">
            <h1>  Bienvenue <?= $role?> <?=$lastname?>  </h1>
    </div>

</body>


<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>
</html>

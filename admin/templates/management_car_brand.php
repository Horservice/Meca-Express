<?php $title = "Gestion de Marque Voiture"; ?>
<?php ob_start(); ?>

<body>
    <div class="container">

    <h1>Gestion Marque voiture</h1>
    <p class="text-end">
        <?php if ($_SESSION['role'] == 'Super Admin') : ?> 
                <a class="btn btn-primary text-end" href="index.php?page=add_car_brand" role="button">Ajouter une nouvelle marque voiture </a>
            <?php elseif ($_SESSION['role'] == "Admin") : ?>
                <a class="btn btn-primary text-end" href="index.php?page=add_car_brand" role="button">Ajouter une nouvelle marque voiture </a>
            <?php elseif ($_SESSION['role'] == "Éditeur") : ?>
                <a class="btn btn-primary text-end disabled">Ajouter une nouvelle marque voiture </a>
            <?php else: ?>
                <a class="btn btn-primary text-end disabled">Ajouter une nouvelle marque voiture </a>
        <?php endif; ?> 
    </p>

    <table class="table table-bordered table-striped mx-auto">
        <thead>
            <tr class="table-secondary">
                <th>id</th>
                <th>Logo</th>
                <th>Nom de la marque </th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach($car_brands as $car_brand){?>
            <tr>
                <td><?=$car_brand['id']?></td>
                <td class="w-25"><img class="w-25"src="../<?=$car_brand['path']?>"> </td>
                <td><?=$car_brand['name']?></td>



                <?php if ($_SESSION['role'] == 'Super Admin') : ?> 
                    <td class="text-center">
                        <a class="btn btn-warning" href="index.php?page=edit_car_brand&id=<?=urlencode($car_brand['id'])?>&name=<?=urlencode($car_brand['name'])?>&path=<?=urlencode($car_brand['path'])?>" role="button">Modifier</a>
                        <a class="btn btn-danger"  href="index.php?page=del_car_brand&id=<?=urlencode($car_brand['id'])?>&name=<?=urlencode($car_brand['name'])?>" role="button">Supprimer</a>
                    </td>

                <?php elseif ($_SESSION['role'] == "Admin") : ?>
                    <td class="text-center">
                        <a class="btn btn-warning" href="index.php?page=edit_car_brand&id=<?=urlencode($car_brand['id'])?>&name=<?=urlencode($car_brand['name'])?>&path=<?=urlencode($car_brand['path'])?>" role="button">Modifier</a>
                        <a class="btn btn-danger"  href="index.php?page=del_car_brand&id=<?=urlencode($car_brand['id'])?>&name=<?=urlencode($car_brand['name'])?>" role="button">Supprimer</a>
                    </td>

                <?php elseif ($_SESSION['role'] == "Éditeur") : ?>
                    <td class="text-center">
                        <a class="btn btn-warning" href="index.php?page=edit_car_brand&id=<?=urlencode($car_brand['id'])?>&name=<?=urlencode($car_brand['name'])?>&path=<?=urlencode($car_brand['path'])?>" role="button">Modifier</a>
                        <a class="btn btn-danger disabled">Supprimer</a>
                    </td>
                <?php else: ?>
                        <td class="text-center" >
                            <a class="btn btn-warning disabled">Modifier</a>
                            <a class="btn btn-danger disabled">Supprimer</a>
                        </td>
                <?php endif; ?> 
              </tr>
            <?php }?>
        </tbody>
    </table>
    </div>



<?php $content = ob_get_clean(); ?> 
<?php require('layout.php') ?>


</body>
</html>
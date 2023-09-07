<?php $title = "Gestion de Tarif"; ?>
<?php ob_start(); ?>

<body>
    <div class="container">

    <h1>Gestion Tarifs</h1>
    <p class="text-end">
        <?php if ($_SESSION['role'] == 'Super Admin') : ?> 
                <a class="btn btn-primary text-end" href="index.php?page=add_all_rate" role="button">Ajouter une tarif</a>
            <?php elseif ($_SESSION['role'] == "Admin") : ?>
                <a class="btn btn-primary text-end" href="index.php?page=add_all_rate" role="button">Ajouter une tarif</a>
            <?php elseif ($_SESSION['role'] == "Éditeur") : ?>
                <a class="btn btn-primary text-end disabled" >Ajouter une tarif</a>
            <?php else: ?>
                <a class="btn btn-primary text-end disabled">Ajouter une tarif</a>
        <?php endif; ?> 
    </p>

    <table class="table table-bordered table-striped mx-auto">
        <thead>
            <tr class="table-secondary">
                <th>id Préstation</th>
                <th>Id_Catégorie </th>
                <th>Catégorie </th>
                <th>Nom de la préstation</th>
                <th>Prix € </th>

                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach($all_rates as $all_rate){?>
            <tr>
                <td><?=$all_rate['id']?></td>
                <td><?=$all_rate['category_id']?></td>
                <td><?=$all_rate['category_name']?></td>
                <td><?=$all_rate['name']?></td>   
                <td><?=$all_rate['price']?></td>



                <?php if ($_SESSION['role'] == 'Super Admin') : ?> 
                    <td class="text-center">
                        <a class="btn btn-warning" href="index.php?page=edit_all_rate&id=<?=urlencode($all_rate['id'])?>&name=<?=urlencode($all_rate['name'])?>&price=<?=urlencode($all_rate['price'])?>&id_category=<?=urlencode($all_rate['id_category'])?>" role="button">Modifier</a>
                        <a class="btn btn-danger"  href="index.php?page=del_all_rate&id=<?=urlencode($all_rate['id'])?>&name=<?=urlencode($all_rate['name'])?>" role="button">Supprimer</a>
                    </td> 
                <?php elseif ($_SESSION['role'] == "Admin") : ?>
                    <td class="text-center">
                        <a class="btn btn-warning" href="index.php?page=edit_all_rate&id=<?=urlencode($all_rate['id'])?>&name=<?=urlencode($all_rate['name'])?>&price=<?=urlencode($all_rate['price'])?>&id_category=<?=urlencode($all_rate['id_category'])?>" role="button">Modifier</a>
                        <a class="btn btn-danger"  href="index.php?page=del_all_rate&id=<?=urlencode($all_rate['id'])?>&name=<?=urlencode($all_rate['name'])?>" role="button">Supprimer</a>
                    </td> 
                <?php elseif ($_SESSION['role'] == "Éditeur") : ?>
                    <td class="text-center">
                        <a class="btn btn-warning" href="index.php?page=edit_all_rate&id=<?=urlencode($all_rate['id'])?>&name=<?=urlencode($all_rate['name'])?>&price=<?=urlencode($all_rate['price'])?>&id_category=<?=urlencode($all_rate['id_category'])?>" role="button">Modifier</a>
                        <a class="btn btn-danger disabled "  href="index.php?page=del_all_rate&id=<?=urlencode($all_rate['id'])?>&name=<?=urlencode($all_rate['name'])?>" role="button">Supprimer</a>
                    </td> 
                <?php else: ?>
                    <td class="text-center">
                        <a class="btn btn-warning disabled" >Modifier</a>
                        <a class="btn btn-danger disabled"  >Supprimer</a>
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
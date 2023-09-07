<?php $title = "Gestion de Categorie"; ?>
<?php ob_start(); ?>

<body>
    <div class="container">

    <h1>Gestion Categorie</h1>
    <p class="text-end">
    <?php if ($_SESSION['role'] == 'Super Admin') : ?> 
        <a class="btn btn-primary text-end" href="index.php?page=add_category" role="button">Ajouter une nouvelle catégorie </a>
        <?php elseif ($_SESSION['role'] == "Admin") : ?>
            <a class="btn btn-primary text-end " href="index.php?page=add_category" role="button">Ajouter une nouvelle catégorie </a>
        <?php elseif ($_SESSION['role'] == "Éditeur") : ?>
            <a class="btn btn-primary text-end disabled">Ajouter une nouvelle catégorie </a>
        <?php else: ?>
            <a class="btn btn-primary disabled">Ajouter une nouvelle catégorie </a>
        <?php endif; ?> 
    </p>    



    <table class="table table-bordered table-striped mx-auto">
        <thead>
            <tr class="table-secondary">
                <th>id</th>
                <th>Nom</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach($categorys as $category){?>
            <tr>
                <td><?=$category['id']?></td>
                <td><?=$category['name']?></td>

                <?php if ($_SESSION['role'] == 'Super Admin') : ?> 
                <td class="text-center">
                    <a class="btn btn-warning" href="index.php?page=edit_category&id=<?=urlencode($category['id'])?>&name=<?=urlencode($category['name'])?>" role="button">Modifier</a>
                    <a class="btn btn-danger" href="index.php?page=del_category&id=<?=urlencode($category['id'])?>&name=<?=urlencode($category['name'])?>" role="button">Supprimer</a>
                </td>

                <?php elseif ($_SESSION['role'] == "Admin") : ?>

                <td class="text-center">
                    <a class="btn btn-warning" href="index.php?page=edit_category&id=<?=urlencode($category['id'])?>&name=<?=urlencode($category['name'])?>" role="button">Modifier</a>
                    <a class="btn btn-danger" href="index.php?page=del_category&id=<?=urlencode($category['id'])?>&name=<?=urlencode($category['name'])?>" role="button">Supprimer</a>
                </td>

                <?php elseif ($_SESSION['role'] == "Éditeur") : ?>
                <td class="text-center">
                    <a class="btn btn-warning" href="index.php?page=edit_category&id=<?=urlencode($category['id'])?>&name=<?=urlencode($category['name'])?>" role="button">Modifier</a>
                    <a class="btn btn-danger disabled ">Supprimer</a>
                </td>

                <?php else: ?>
                <td class="text-center">
                    <a class="btn btn-warning disabled ">Modifier</a>
                    <a class="btn btn-danger disabled ">Supprimer</a>
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
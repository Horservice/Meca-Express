<?php $title = "Gestion Galerie photo"; ?>
<?php ob_start(); ?>

<body>
    <div class="container">

    <h1>Gestion Galerie photo</h1>
    <p class="text-end">



    <?php if ($_SESSION['role'] == 'Super Admin') : ?> 
        <a class="btn btn-primary text-end" href="index.php?page=add_gallery_picture" role="button">Ajouter une nouvelle photo</a>
        <?php elseif ($_SESSION['role'] == "Admin") : ?>
            <a class="btn btn-primary text-end" href="index.php?page=add_gallery_picture" role="button">Ajouter une nouvelle photo</a>
        <?php elseif ($_SESSION['role'] == "Éditeur") : ?>
            <a class="btn btn-primary text-end disabled " role="button">Ajouter une nouvelle photo</a>
            <?php else: ?>
            <a class="btn btn-primary text-end disabled" role="button">Ajouter une nouvelle photo</a>
        <?php endif; ?> 
    </p>

    <table class="table table-bordered table-striped mx-auto">
        <thead>
            <tr class="table-secondary">
                <th>id</th>
                <th>Images</th>
                <th>Titre de la photo</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach($gallery_pictures as $gallery_picture){?>
            <tr>
                <td><?=$gallery_picture['id']?></td>
                <td class="w-25"><img class="w-50" src="../<?=$gallery_picture['path']?>"> </td>
                <td><?=$gallery_picture['name']?></td>
                <td><?=$gallery_picture['description']?></td> 

                <?php if ($_SESSION['role'] == 'Super Admin') : ?> 
                    <td class="text-center">
                        <a class="btn btn-info" href="index.php?page=preview_gallery_picture&id=<?=urlencode($gallery_picture['id'])?>&path=<?=urlencode($gallery_picture['path'])?>&name=<?=urlencode($gallery_picture['name'])?>&description=<?=urlencode($gallery_picture['description'])?>" role="button">Voir</a>
                        <a class="btn btn-warning" href="index.php?page=edit_gallery_picture&&id=<?=urlencode($gallery_picture['id'])?>&path=<?=urlencode($gallery_picture['path'])?>&name=<?=urlencode($gallery_picture['name'])?>&description=<?=urlencode($gallery_picture['description'])?>" role="button">Modifier</a>
                        <a class="btn btn-danger" href="index.php?page=del_gallery_picture&id=<?=urlencode($gallery_picture['id'])?>&name=<?=urlencode($gallery_picture['name'])?>" role="button">Supprimer</a>
                    </td>
                <?php elseif ($_SESSION['role'] == 'Admin') : ?> 
                    <td class="text-center">
                        <a class="btn btn-info" href="index.php?page=preview_gallery_picture&id=<?=urlencode($gallery_picture['id'])?>&path=<?=urlencode($gallery_picture['path'])?>&name=<?=urlencode($gallery_picture['name'])?>&description=<?=urlencode($gallery_picture['description'])?>" role="button">Voir</a>
                        <a class="btn btn-warning" href="index.php?page=edit_gallery_picture&&id=<?=urlencode($gallery_picture['id'])?>&path=<?=urlencode($gallery_picture['path'])?>&name=<?=urlencode($gallery_picture['name'])?>&description=<?=urlencode($gallery_picture['description'])?>" role="button">Modifier</a>
                        <a class="btn btn-danger" href="index.php?page=del_gallery_picture&id=<?=urlencode($gallery_picture['id'])?>&name=<?=urlencode($gallery_picture['name'])?>" role="button">Supprimer</a>
                    </td>
                <?php elseif ($_SESSION['role'] == "Éditeur") : ?>
                    <td class="text-center">
                        <a class="btn btn-info" href="index.php?page=preview_gallery_picture&id=<?=urlencode($gallery_picture['id'])?>&path=<?=urlencode($gallery_picture['path'])?>&name=<?=urlencode($gallery_picture['name'])?>&description=<?=urlencode($gallery_picture['description'])?>" role="button">Voir</a>
                        <a class="btn btn-warning" href="index.php?page=edit_gallery_picture&&id=<?=urlencode($gallery_picture['id'])?>&path=<?=urlencode($gallery_picture['path'])?>&name=<?=urlencode($gallery_picture['name'])?>&description=<?=urlencode($gallery_picture['description'])?>" role="button">Modifier</a>
                        <a class="btn btn-danger disabled">Supprimer</a>
                </td>
                <?php else: ?>
                    <td class="text-center" >
                    <a class="btn btn-info disabled">Voir</a>
                    <a class="btn btn-warning disabled" >Modifier</a>
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
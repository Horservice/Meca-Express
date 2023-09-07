<?php $title = "Gestion de Admin"; ?>
<?php ob_start(); ?>

<body>
    <div class="container">

    <h1>Gestion Admin</h1>
    <p class="text-end">

    <?php if ($_SESSION['role'] == 'Super Admin') : ?> 
        <a class="btn btn-primary text-end" href="index.php?page=add_admin" role="button">Ajouter un Admin</a>
        <?php elseif ($_SESSION['role'] == "Admin") : ?>
            <a class="btn btn-primary text-end disabled " role="button">Ajouter un Admin</a>
        <?php elseif ($_SESSION['role'] == "Éditeur") : ?>
            <a class="btn btn-primary text-end disabled " role="button">Ajouter un Admin</a>
            <?php else: ?>
            <a class="btn btn-primary text-end disabled" role="button">Ajouter un Admin</a>
        <?php endif; ?> 
    </p>


    <table class="table table-bordered table-striped mx-auto">
        <thead>
            <tr class="table-secondary">
                <th>id</th>
                <th>Role</th>
                <th>Prénom</th> 
                <th>Nom</th>
                <th>Action</th>
            </tr>
    </thead>


        <tbody>
            <?php
            foreach($admins as $admin){?>
            <tr>
                <td><?=$admin['id']?></td>
                <td><?=$admin['role']?></td>
                <td><?=$admin['firstname']?></td>
                <td><?=$admin['lastname']?></td>    


                

                <?php if ($_SESSION['role'] == 'Super Admin') : ?> 
                        <td class="text-center ">
                            <a class="btn btn-warning " href="index.php?page=edit_admin&id=<?=urlencode($admin['id'])?>&role=<?=urlencode($admin['role'])?>&firstname=<?=urlencode($admin['firstname'])?>&lastname=<?=urlencode($admin['lastname'])?>&email=<?=urlencode($admin['email'])?>" role="button" >Modifier</a>
                            <a class="btn btn-danger" href="index.php?page=del_admin&id=<?=urlencode($admin['id'])?>&lastname=<?=urlencode($admin['lastname'])?>" role="button" >Supprimer</a>
                        </td>


                        <?php elseif ($_SESSION['role'] == "Admin") : ?>
                        <td class="text-center" >
                            <a class="btn btn-warning" href="index.php?page=edit_admin&id=<?=urlencode($admin['id'])?>&role=<?=urlencode($admin['role'])?>&firstname=<?=urlencode($admin['firstname'])?>&lastname=<?=urlencode($admin['lastname'])?>&email=<?=urlencode($admin['email'])?>">Modifier </a>
                            <a class="btn btn-danger disabled">Supprimer</a>
                        </td>

                        <?php elseif ($_SESSION['role'] == "Éditeur") : ?>
                        <td class="text-center" >
                            <a class="btn btn-warning" href="index.php?page=edit_admin&id=<?=urlencode($admin['id'])?>&role=<?=urlencode($admin['role'])?>&firstname=<?=urlencode($admin['firstname'])?>&lastname=<?=urlencode($admin['lastname'])?>&email=<?=urlencode($admin['email'])?>">Modifier </a>
                            <a class="btn btn-danger disabled">Supprimer</a>
                        </td>

                        <?php else: ?>
                            <td class="text-center" >
                            <a class="btn btn-warning disabled">Modifier </a>

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
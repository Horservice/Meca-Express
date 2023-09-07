<?php $title = "Ajout d'un Admin"; ?>
<?php ob_start(); ?>

<body>
<div class="container">
    <form action="#" method="POST" class="row my-5">
        <h1 class="h3 mb-3 fw-normal">Ajouter un nouveau admin</h1>
        <h4><?=$msg1?><?=$msg2?></h4>
        <div>
        <label for="email">Email</label>
            <input type="email" class="form-control" placeholder="exemple@live.fr" name="email">
        </div>
        <div>
        <label for="firstname">Prénom</label>
            <input type="text" class="form-control" placeholder="Prénom" name="firstname" >
        </div>
        <div>
        <label for="lastname">Famille</label>

            <input type="text" class="form-control" placeholder="Nom de Famille" name="lastname">
        </div>
        <div>

        <div class="mb-3">
        <label for="Role">Role</label>
        <select class="form-select" aria-label="Default select example" name="role">
            <option name="Admin">Admin</option>
            <option name="Éditeur">Éditeur</option>
            <option name="Visiteur">Visiteur</option>
        </select>
        <div>


        <label for="password">Mot de passe</label>

            <input type="password" class="form-control" placeholder="Mot de passe" name="password" >
        </div>

		<div class="mb-3 col-3 py-2">
            <a class="btn btn-warning" href="index.php?page=management_admin" role="button">Retour</a>
            <button type="submit" class="btn btn-primary" name="submit">Valider</button>	
        </div>
    </form>
</div>


<?php $content = ob_get_clean(); ?> 
<?php require('layout.php') ?>


</body>
</html>
<?php $title = "Modification d'un Admin"; ?>
<?php ob_start(); ?>

<body>


<div class="container">
    <form action="#" method="POST" class="row my-5">
    <h1 class="h3 mb-3 fw-normal">Modification de l'admin</h1>
    <h4><?=$msg1?><?=$msg2?></h4>   

        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control"  name="email" placeholder="exemple@live.fr" value="<?=(isset($_GET['email'])) ? $email  : ''?>">
        </div>

        <div class="mb-3">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" placeholder="Prénom" name="firstname"  value="<?=(isset($_GET['firstname'])) ? $firstname : ''?>" >
        </div>

        <div class="mb-3">
            <label for="lastname">Famille</label>
            <input type="text" class="form-control" placeholder="Nom de Famille" name="lastname"  value="<?=(isset($_GET['lastname'])) ? $lastname  : ''?>" > 
        </div>


        <div class="mb-3">
            <label for="Role">Role</label>
                <select class="form-select" aria-label="Default select example" name="role">
                    <option name="Admin">Admin</option>
                    <option name="Editor">Éditeur</option>
                    <option name="Visitor">Visiteur</option>
                </select>
        <div>


        <div class="mb-3">
            <label for="password">Nouveau Mot de passe</label>
            <input type="password" class="form-control" placeholder="Mot de passe" name="newpassword" >
        </div>

        <div class="mb-3">
            <label for="checkpassword">Confirmation Mot de passe</label>
            <input type="password" class="form-control" placeholder="Mot de passe" name="password" >
        </div>




		<div class="mb-3 col-3 py-2">
            <a class="btn btn-warning" href="index.php?page=management_admin" role="button">Retour</a>
            <button type="submit" class="btn btn-primary" name="submit">Valider</button>	
        </div>

    </form>
</div>


</body>

<?php $content = ob_get_clean(); ?> 
<?php require('layout.php') ?>

</html>
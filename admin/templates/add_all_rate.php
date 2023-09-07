<?php $title = "Ajout d'un nouveau Tarif"; ?>
<?php ob_start(); ?>

<body>
    
<div class="container">
<h1 class="h3 mb-3 fw-normal">Ajouter un nouveau Tarif</h1>
       
<h4><?=$msg1?><?=$msg2?></h4>

        <form action="" method="POST" class="row my-5" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="name" class="form-label">Titre de la préstation</label>
                <input type="text" class="form-control"  name="name" placeholder="Ramplacement de moteur">
            </div>

            <div class="mb-3">
			    <label for="price" class="form-label">Prix</label>
			    <input type="text" class="form-control" placeholder="00" name="price">
		    </div>

            <div class="mb-3">
                <label for="id_category" class="form-label">Catégorie</label>
                <select class="form-select"  aria-label="Default select example" name="id_category">
                    <?php
                    foreach ($categorys as $category) {
                    ?>
                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3 col-3">
                <a class="btn btn-warning" href="index.php?page=management_all_rate" role="button">Retour</a>
                <button type="submit" class="btn btn-primary" name="submit">Valider</button>

            </div>

        </form>
    </div>

<?php $content = ob_get_clean(); ?> 
<?php require('layout.php') ?>



</body>
</html>
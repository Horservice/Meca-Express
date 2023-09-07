<?php $title = "Modification d'un Tarif"; ?>
<?php ob_start(); ?>

<body>
    

<div class="container">       
<h1 class="h3 mb-3 fw-normal">Modification Tarif</h1>

<h4><?=$msg?></h4>

        <form action="" method="POST" class="row my-5" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="name" class="form-label">Nom de la préstation </label>
                <input type="text" class="form-control" placeholder="Remplacement du moteur, etc"name="name" value="<?=(isset($_GET['name'])) ? $name  : ''?>">
            </div>

            
            <div class="mb-3">
			    <label for="price" class="form-label">Prix</label>
			    <input type="text" class="form-control" placeholder="" name="price" value="<?=(isset($_GET['price'])) ? $price  : ''?>">
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



</body>

<?php $content = ob_get_clean(); ?> 
<?php require('layout.php') ?>

</html>
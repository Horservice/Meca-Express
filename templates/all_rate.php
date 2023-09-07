<?php ob_start(); ?>
<title><?= $title = "Méca Express - Tarifs"?></title>
<link href="../css/all_rate.css" rel="stylesheet" type="text/css">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<meta name="description" content="Page tarif sur les différent prestation du site Meca express">
<meta name="keywords" content="garage mécanique, garage, automobile, méca express woustviller, tarif,">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 

<body>

    <div class="container-fluid text-center bggrey py-5">
        <h1> Tarifs</h1>
        <h2> Pour toutes autres prestation tarifs sur demande !</h2>
    </div>



<div class="container-fluid text-center teste py-3">
    <?php if ($noCategorys): ?>
        <select class="form-select container abc" onchange="ShowRate()" aria-label="Default select example" name="id_category " disabled>

            <option value="" selected disabled>Aucune catégorie disponible</option>

        </select>
    <?php else: ?>
        <select class="form-select container abc" onchange="ShowRate()" aria-label="Default select example" name="id_category">
          <option value="0" selected>Selectionner une catégorie </option>
            <?php foreach ($categorys as $category): ?>
                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>

            <?php endforeach; ?>
        </select>
    <?php endif; ?>
</div>

        <div class="container my-5 py-5 bgwhite rounded " id="txtHint"></div>


</body>

<script>

function ShowRate() {
    const selectedCategoryId = $('select[name="id_category"]').val();


    if (selectedCategoryId === "0") {
        $('#txtHint').html('<p class="text-center">Veuillez sélectionner une catégorie.</p>');
        return;
    }



    $.ajax({
      url: '../controllers/get_rate.php',
      type: 'GET',
      data: { id_category: selectedCategoryId },
      success: function (response) {
        $('#txtHint').html(response);
      },
      error: function () {
        alert('Une erreur s\'est produite lors de la récupération du prix.');
      }
    });
  }

</script>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>

</html>
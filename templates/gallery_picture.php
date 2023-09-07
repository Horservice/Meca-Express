<?php ob_start(); ?>
<link href="../css/gallery_picture.css" rel="stylesheet" type="text/css">
<title><?= $title = "Méca Express - Galerie photo"; ?></title>
<meta name="keywords" content="garage mécanique, garage, automobile, méca express woustviller, nous trouver, photo">
<meta name="description" content="Page Galerie photo du site Meca express">


<body>
  <div class="container-fluid text-center teste py-5">
    <h1>Galerie photo</h1>
    <p class="pt-2">Voici des voitures sur lesquelles nous avons travaillé, que ce soit pour des pannes, des réparations ou d'autres problèmes mécaniques.</p>
  </div>

  <div class="container py-5">
    <h2 class="text-center py-5"><?= $noPhotos ?></h2>
    <div class="row row-cols-2 row-cols-md-3 g-4 text-center">
      <?php foreach ($gallery_pictures as $gallery_picture) { ?>
        <div class="col">
          <div class="card cardpicture border-0  h-100">
            <img src="../uploads/<?= $gallery_picture['path'] ?>" class="card-img-top topimage h-100 object-fit-contain " alt=<?=$gallery_picture['description']?>>
            <div class="card-body">
              <a class="btn" href="index.php?page=previewPicture&id=<?=$gallery_picture['id'] ?>" role="button" ><i class="fa-regular fa-eye fa-2xl abc" style="color: #ffffff;"></i></a>
            </div>
          </div>  
        </div>
      <?php } ?>
    </div>
  </div>  

  <nav aria-label="Page navigation" class="">
    <ul class="pagination justify-content-center py-5">
        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
            <a class="page-link rounded-5 lipage" href="?page=galleryPicture&pagenb=<?= $currentPage - 1 ?>"><</a>
        </li>
        <?php for ($page = 1; $page <= $pages; $page++) : ?>
            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                <a class="page-link rounded-5 mx-1 lipage" href="?page=galleryPicture&pagenb=<?= $page ?>"><?= $page ?></a>
            </li>
        <?php endfor ?>
        <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
            <a class="page-link rounded-5 lipage " href="?page=galleryPicture&pagenb=<?= $currentPage + 1 ?>">></a>
        </li>
    </ul>
</nav>

</body>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
</html>
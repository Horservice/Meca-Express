<?php ob_start(); ?>
<link href="../css/homepage.css" rel="stylesheet" type="text/css">
<title><?= $title ?></title>
<meta name="keywords" content="garage mécanique, garage, automobile, méca express woustviller, Accueil, google map">
<meta name="description" content="Page d'accueil site Meca express">


<body>
<main>

  <div class="container-fluid py-5 ">   



    <div class="row row-cols-1 row-cols-md-2 g-4 ">
      <div class="col-md-4 ">
        <div class="card text-center  ">
          <div class="card-body infos rounded">
            <h5 class="card-title cardanimatipn">Méca Express</h5>
            <p class="card-text">6 rue de Nancy 57915 Woustviller</p>
            <p class="card-text">
            Lun - Jeu 9h30 - 12h00 I 14h00 - 18h00<br>
            Ven 09h30 - 12h00 I 14h00 - 17h30<br>
            Sam - Dim Fermé 
            </p>
            <p class="card-text text-center">
              <strong>Rendez-vous obligatoire ! </strong><br>
              <strong>Devis gratuit ! </strong><br>
              </p>
              <div class="d-grid col-5 btYellow rounded-pill mx-auto">
                <a class="btn aprestation rounded-pill " href="index.php?page=foundUs">Nous trouvés</a>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-8 map">
        <iframe class="w-100 googlemap rounded "src="https://www.google.com/maps/embed?pb=!4v1686126352398!6m8!1m7!1sTGRom60iGMWQ-ZF64vls3Q!2m2!1d49.07583152412261!2d7.009910755706284!3f274.52395115585296!4f-15.566657082535542!5f0.7820865974627469" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </div>

  </div>


      <div class="container-fluid text-center backgroundh   py-5   ">
          <h1>Méca Express</h1>
          <p>A Woustviller, le garage met a votre service ça spécialité en mécanique automobile depuis 6 ans </p>
      </div>

    <div class="container-fluid text-center backgroundh py-5 mb-5">
        <h2>NOS PRESTATIONS</h2>
    </div>
    
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
          <div class="card prestation border-0 rounded">
            <img src="../image/abc.JPG" class="card-img-top " alt="...">
            <div class="card-body colorbody">
              <h5 class="card-title">Entretien</h5>
              <hr class="w-50">
              <p class="card-text">Nous vérifions l'état de votre voiture : Amortisseur, Pneu, Distribution...</p>
            </div>
          </div>
        </div>
    
        <div class="col">
          <div class="card prestation border-0 rounded">
            <img src="../image/meca1.jpg" class="card-img-top" alt="...">
            <div class="card-body colorbody">
              <h5 class="card-title">Mécanique</h5>
              <hr class="w-50">
              <p class="card-text">Nous nous occupons de toute la partie mécanique de votre véhicule</p>
            </div>
          </div>
        </div>
    
        <div class="col">
          <div class="card prestation border-0 rounded">
            <img src="../image/testea.jpg" class="card-img-top" alt="...">
            <div class="card-body colorbody">
              <h5 class="card-title">Diagnostic</h5>
              <hr class="w-50">
              <p class="card-text">Nous effectuons un diagnostic de votre voiture pour y détecter le moindre problème</p>
            </div>
          </div>
        </div>
    
        <div class="col ">
          <div class="card prestation border-0 rounded">
            <img src="../image/auto.png" class="card-img-top bgtopcard" alt="...">
            <div class="card-body colorbody">
              <h5 class="card-title ">Controle Technique</h5>
              <hr class="w-50">
              <p class="card-text ">En partenariat avec Auto Controle pour passer le pré-contrôle de votre véhicule</p>
            </div>
          </div>
        </div>
      </div>
    
      <div class="row mt-5">
        <div class="d-grid col-5 btYellow rounded-pill mx-auto mt-5">
          <a class="btn aprestation rounded-pill " href="index.php?page=maintenance">Nos prestation aux complète</a>
      </div>
    
      </div>
    </div>


    <div class="container-fluid backgroundh text-center my-5 py-5">
        <h3>SERVICE</h3>
        <p>Nous serons ravis de vous accueiler de notre garage</p>
    </div>



      <div class="container my-5">
        <div class="row g-0 graya position-relative rounded-5 infocservice">
            <div class="col-md-6 mb-md-0 p-md-4"> 
    
              <img src="../image/abc.jpg" class="w-100 rounded-5" alt="...">
              
            </div>
            <div class="col-md-6 p-4 ps-md-0">
              <h5 class="mt-0">Des services assurés par un professionnel</h5>
              <hr>
              <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
            </div>
          </div>
    </div>




    <div class="container-fluid backgroundh text-center my-5 py-5">
        <h4>VÉHICULE DE TOUT MARQUES</h4>
        <p>Nous fournissons un service d'entretien de premier ordre pour tous les types de véhicules.</p>
    </div>


    <div class="container text-center my-5">


    <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3 ">
            <?php foreach ($car_brands as $car_brand) { ?>
                <div class="col">
                    <div class="car carlogowite rounded h-100 rounded-5 ">
                        <img src="../uploads/<?=$car_brand['path']?> " loading="lazy"  class="card-img-top carlogowhite h-100 rounded-5 object-fit-scale "  alt="logo <?=$car_brand['name']?>.">
                    </div>
                </div>
            <?php } ?>
        </div>
        
    </div>





    

</main>    
</body>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>

</html>
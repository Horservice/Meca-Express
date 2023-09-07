<?php ob_start(); ?>
<link href="../css/found_us.css" rel="stylesheet" type="text/css">
<title><?= $title ?></title>
<meta name="keywords" content="garage mécanique, garage, automobile, méca express woustviller, nous trouver, google map">
<meta name="description" content="Page nous trouverdu site Meca express">


<body>
    <div class="container-fluid backgroundh text-center py-3">

        <h1 class="py-3 ">Nous trouver </h1>

    </div>

    <div class="container text-center backgrlist py-5 my-5 rounded">

        <p>Tout renseignement / devis merci de utilise le numéro de téléphone ci dessus :</p>

            <div class="container my-5 "><img src="../image/phone-solid.svg" class="logo_number mx-2" alt="Logo number de font awesome">06 46 88 38 66</div>

        <p>Ou tout autre renseignement venez sur place </p>

        <p><img src="../image/wheelchair-solid.svg" class="glass mx-2" alt="icone de chaise roulante de Font awesome" >Accessibilité : </p>

               <p>Entrée accessible en fauteuil roulant<br>    

                Parking accessible en fauteuil roulant</p>


    </div>
    

    <div class="container backgrlist text-center py-5 rounded">
        <h2 >Comment nous trouver : <img src="../image/magnifying-glass-solid.svg" class="glass" alt="logowheelchair de font awesomes"> </h2>
    </div>

    <div class="container py-5 ">

        <div class="ratio ratio-16x9 googlemap  ">
            <iframe class="rounded" title="Google Map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d326.69561912895676!2d7.009547408442578!3d49.0759036855873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47944a2691d2cccb%3A0xb9591d7eff4c766!2sMeca%20Express!5e0!3m2!1sfr!2sfr!4v1683207226774!5m2!1sfr!2sfr" width="600" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
        </div>

    </div>


</body>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>

</html> 
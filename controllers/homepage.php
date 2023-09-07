<?php

//controllers/homepage.php

require_once('../model/homepage.php');

function homepage(){

    $title="Méca Express - Page Accueil";

    $car_brands = showCar();

    require_once('../templates/homepage.php');



}
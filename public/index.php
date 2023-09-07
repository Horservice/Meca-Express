<?php
//index.php

try {

	//Controllers/

	//homepage
	require_once('../controllers/homepage.php');

	//Notre garage
	require_once('../controllers/our_garage.php');

	//entretien
	require_once('../controllers/maintenance.php');

	//tarif
	require_once('../controllers/all_rate.php');

	//Nous trouvés
	require_once('../controllers/found_us.php');

	//Galerie photo
	require_once('../controllers/gallery_picture.php');

	//Voici photo choisi 
	require_once('../controllers/preview_picture.php');

	//Mention légal
	require_once('../controllers/legal_notice.php');


	if(isset($_GET['page'])) { 
		$page = strval($_GET['page']);

			if($page == "homepage") {
				homepage();
			}

			elseif($page == "ourGarage") {
				our_garage();
			}  

			elseif($page == "maintenance") {
				maintenance();
			}  

			elseif($page == "allRate") {
				all_rate();

			}  

			elseif($page == "foundUs") {
				found_us();
			}  

			elseif($page == "galleryPicture") {
				gallery_picture();

			}  

			elseif($page == "previewPicture") {
				if (isset($_GET['id']) &&  $_GET['id'] > 0){

					$id = strval($_GET['id']);

					preview_picture($id);	

				} else {

					throw new Exception('Aucun identifiant de cette Photo existe');


				}


			}  


			elseif ($page == "legalNotice") {
				legal_notice();

			}


		} else {
			homepage();
		}




} catch (Exception $e) {
    $errorMessage = $e->getMessage();

	require('../templates/error.php');
}

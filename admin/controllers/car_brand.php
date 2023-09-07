<?php
//controllers/car_brand.php
require_once('../model/car_brand.php');


function management_car_brand(){

    $car_brands = ShowCarbrand();
         require_once('../templates/management_car_brand.php');
}   



function add_car_brand(){

    $msg1=null;
    $msg2=null;

    if(isset($_POST['submit'])){

        if(!isset($_POST['name']) || empty($_POST['name'])
        || (!isset($_FILES['photo']) || empty($_FILES['photo']))){

            $msg1='<h2 class="text-danger">Merci de bien vouloir remplir le formulaire !</h2>';

        } else {

                    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {


                        if ($_FILES['photo']['size'] <= 1000000) {


                            $fileInfo = pathinfo($_FILES['photo']['name']);
                            $extension = $fileInfo['extension'];
                            $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png','svg', 'webp'];
                            if (in_array($extension, $allowedExtensions)) { 

                                $succes = AddCarbrand();

                                
                                if ($succes) {

                                    $msg2='<h2 class="text-success">Ajoute de la marque de voiture Réussi </h2>';

                                } else {
                                    $msg1='<h2 class="text-danger">Une erreur et survenue !</h2>';
                                }
                                
                        

                            } else {
                                $msg1 = '<h2 class="text-danger">Le format du fichier n\'est pas autorisé. Merci de n\'envoyer que des fichiers .jpg, .jpeg, .png ou .gif!</h2>';
                            }


                        } else {

                            $msg1 = '<h2 class="text-danger">Le fichier dépasse la taille autorisée !</h2>';

                        }

                    } else {
                        
                        $msg1 = '<h2 class="text-danger">Le fichier n\'a pas été envoyé correctement !</h2>';
                    }

        }

    }

        require_once('../templates/add_car_brand.php');
}


function edit_car_brand($id,$name,$path){

    $msg=null;


    if (isset($_POST['submit'])) {

        if (!isset($_POST['name']) || empty($_POST['name']))
        {    
            $msg='<h2 class="text-danger">Merci de bien vouloir remplir le formulaire !</h2>';
    
        }  else {

            if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
    
                if ($_FILES['photo']['size'] <= 1000000) {
                
                    $fileInfo = pathinfo($_FILES['photo']['name']);
                    $extension = $fileInfo['extension'];
                    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png', 'webp'];
                    if (in_array($extension, $allowedExtensions)) { 

                        $succes = UpdateCarBrand($id,$name,$path);

                        if($succes) {


                            $msg='<h2 class="text-success">Modification Réussi </h2>';


                        } else {


                            $msg='<h2 class="text-danger">Une erreur et survenue  !</h2>';
                        }
                        
                    } else {
                        $msg = '<h2 class="text-danger">Le format du fichier n\'est pas autorisé. Merci de n\'envoyer que des fichiers .jpg, .jpeg, .png ou .gif!</h2>';

                    }
                } else {
                    $msg = '<h2 class="text-danger">Le fichier dépasse la taille autorisée !</h2>';
                }
            } else {
                $msg = '<h2 class="text-danger">Le fichier n\'a pas été envoyé correctement !</h2>';
            }

        }

    }

    require_once('../templates/edit_car_brand.php');

}


function del_car_brand($id,$name){

    $oldname = $name;
    $msg1 = null;

    if(isset($_POST['submit'])){
        $succes = DeleteCarbrand($id);
        
        if (!$succes) {

            $msg1 = "la marque $oldname n'a pas pu être supprimer";

        } else {
            $msg1 = "la marque $oldname a été bien supprimer";
        }
        


    }

    require('../templates/del_car_brand.php');


}
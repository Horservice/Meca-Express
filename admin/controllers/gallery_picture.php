<?php
//controllers/gallery_picture.php
require_once('../model/gallery_picture.php');

function management_gallery_picture(){

    $gallery_pictures = ShowGalleryPicture();
         require_once('../templates/management_gallery_picture.php');


}   

function add_gallery_picture(){

    $msg1=null;
    $msg2=null;
    
    if(isset($_POST['submit'])){
    
        if(!isset($_POST['name']) || empty($_POST['name'])
        || (!isset($_POST['description']) || empty($_POST['description']))
        || (!isset($_FILES['photo']) || empty($_FILES['photo']))){
            
            $msg1='<h2 class="text-danger">Merci de bien vouloir remplir le formulaire !</h2>';

        } else {
    
            if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
                if ($_FILES['photo']['size'] <= 1000000) {

            
                        $fileInfo = pathinfo($_FILES['photo']['name']);
                        $extension = $fileInfo['extension'];
                        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png', 'webp', 'PNG'];
                        
                        if (in_array($extension, $allowedExtensions)) {
                            $succes = AddGalleryPicture();
            
                            if ($succes) {
                                $msg2 = '<h2 class="my-5 text-success">Une nouvelle photo a été ajoutée.</h2>';
                            } else {
                                $msg1 = '<h2 class="text-danger">Une erreur est survenue.</h2>';
                            }
                        } else {
                            $msg1 = '<h2 class="text-danger">Le format du fichier n\'est pas autorisé. Merci de n\'envoyer que des fichiers .jpg, .jpeg, .png , .webp </h2>';
                        }

                } else {
                    $msg1 = '<h2 class="text-danger">Le fichier dépasse la taille autorisée !</h2>';
                }
            } else {
                $msg1 = '<h2 class="text-danger">Le fichier n\'a pas été envoyé correctement !</h2>';
            }
    
        }
    }
    
    require_once('../templates/add_gallery_picture.php');
}


function edit_gallery_picture($id,$name,$path,$description){


    $msg = null;


    if (isset($_POST['submit'])) 


    
            if (!isset($_POST['name']) || empty($_POST['name'])
            || (!isset($_POST['description']) || empty($_POST['description']))
            || (!isset($_FILES['photo']) || empty($_FILES['photo']))){

            $msg='<h2 class="text-danger">Merci de bien vouloir remplir le formulaire !</h2>';

        } else {


            if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {

                if ($_FILES['photo']['size'] <= 1000000) {


                    $fileInfo = pathinfo($_FILES['photo']['name']);
                    $extension = $fileInfo['extension'];
                    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                    if (in_array($extension, $allowedExtensions)) { 

                        $succes = UpdateGalleryPicture($id,$name,$description);

                        if ($succes) {
                            $msg = '<h2 class="my-5 text-success">la photo a été bien modifier.</h2>';

                        }else {
                            $msg = '<h2 class="text-danger">Une erreur est survenue.</h2>';

                        }

                    } else {


                        $msg = '<h2 class="text-danger">Le format du fichier n\'est pas autorisé. Merci de n\'envoyer que des fichiers .jpg, .jpeg, .png ou .gif!</h2>';

                    }





                }  else {
                    $msg = '<h2 class="text-danger">Le fichier dépasse la taille autorisée !</h2>';
                }

            } else {
                $msg = '<h2 class="text-danger">Le fichier n\'a pas été envoyé correctement !</h2>';
            }


        }

        require_once('../templates/edit_gallery_picture.php');

}





function del_gallery_picture($id,$name){

    $nom = $name;
    $msg1 = null;


    if(isset($_POST['submit'])){



        $succes = DeleteGalleryPicture($id);

        if ($succes) {
            $msg1 = '<h2 class="my-5 text-success">la photo a été bien supprimer.</h2>';
        } else {
            $msg1 = '<h2 class="text-danger">Une erreur est survenue.</h2>';
        }
    
    }


    require_once('../templates/del_gallery_picture.php');


}

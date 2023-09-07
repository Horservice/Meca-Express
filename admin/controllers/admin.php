<?php
//controllers//admin.php
require_once('../model/admin.php');


function management_admin(){

    $admins = ShowAdmin();
        require_once('../templates/management_admin.php');

}



function add_admin(){

    $msg1=null;
    $msg2=null;

    if(isset($_POST['submit'])){

        if (!isset($_POST['email']) || (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        || (!isset($_POST['role']) || empty($_POST['role']))
        || (!isset($_POST['lastname']) || empty($_POST['lastname']))
        || (!isset($_POST['firstname']) || empty($_POST['firstname']))
        || (!isset($_POST['password']) || empty($_POST['password']))
        ){
            
            $msg1='<h2 class="text-danger">Merci de bien vouloir remplir le formulaire !</h2>';
    
        } else {


            $succes = Addadmin();


            if ($succes) {


                $msg2='<h2 class="my-5 text-success">- Un admin a été ajouter avec succès ! .</h2>';
    
    
            } else {
                $msg1='<h2 class="text-danger">Une erreur et survenue !</h2>';
    
            }
        }

    }

        require_once('../templates/add_admin.php');
}



function edit_admin($id, $role ,$firstname, $lastname, $email){

    $msg1=null;
    $msg2=null;


    if(isset($_POST['submit'])){

        if (!isset($_POST['email']) || (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        || (!isset($_POST['firstname']) || empty($_POST['firstname']))
        || (!isset($_POST['lastname']) || empty($_POST['lastname']))
        || (!isset($_POST['newpassword']) || empty($_POST['newpassword']))
        || (!isset($_POST['password']) || empty($_POST['password']))){
            
            $msg1='<h2 class="text-danger">Merci de bien vouloir remplir le formulaire !</h2>';

        } else {
            
                if ($_POST["newpassword"] == $_POST["password"]) {

                    $succes = UpdateAdmin($id, $role, $firstname, $lastname, $email);

                    if ($succes) {
    
                        $msg2='<h2 class="text-success">Modification réussi </h2>';
                    
                    } else {
    
                        $msg1='<h2 class="text-danger">Une erreur et survenue ! </h2>';
                    }

                } else {

                    $msg1='<h2 class="text-danger"> Les Mot de passe sont pas identique !  </h2>';

                }

            }

        }

        require_once('../templates/edit_admin.php');

}


function PageDeleteAdmin($id,$lastname){

    $nom = $lastname;
    $msg1 = null;


    if(isset($_POST['submit'])){

        $succes = DeleteAdmin($id);

        if ($succes) {

            $msg1 = "<h2 class='text-success'>L'admin $nom a été bien supprimé</h2>";


        } else {

            $msg1='<h2 class="text-danger">Une erreur et survenue !</h2>';

        }
        
    }

    require_once('../templates/del_admin.php');
}


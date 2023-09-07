<?php
//index.php
session_start();

try {

    //Controllers

    //Dashboard
    require_once('../controllers/dashboard.php');

    //Admin
    require_once('../controllers/admin.php');

    //Car_brand
    require_once('../controllers/car_brand.php');

    //Tarif
    require_once('../controllers/all_rate.php');

    //Category
    require_once('../controllers/category.php');


    //Gallery picture
    require_once('../controllers/gallery_picture.php');
    require_once('../controllers/preview_gallery_picture.php');


    //Si pas de admin connecté 
    if (!isset($_SESSION['lastname'])) {
        header('location: login.php');
    }

    //Déconnection 
    if (isset($_GET['action']) && $_GET['action'] == "signout") {
        session_destroy();
        header('location: login.php');
    }

    
    //Pages
    if (isset($_GET['page'])) {
        $page = strval($_GET['page']);
            if($page == "dashboard") {
              dashboard();
            }

            elseif($page == "management_admin") {
                management_admin();

            } 

            elseif($page == "add_admin") {
                add_admin();
            } 

            elseif($page == "edit_admin") {
              if(isset($_GET['id']) && $_GET['id'] > 0) {


                $id = strval($_GET['id']);

                $role = strval($_GET['role']);

                $lastname = strval($_GET['lastname']);

                $firstname = strval($_GET['firstname']);

                $email = strval($_GET['email']);

                edit_admin($id,$role,$firstname,$lastname,$email);



              } else {

                throw new Exception('Aucun identifiant cette Admin trouvé pour être modifier');

             }


            } 

            elseif($page == "del_admin") {
             if(isset($_GET['id']) && $_GET['id'] > 0) {

                $id = strval($_GET['id']);

                $lastname = strval($_GET['lastname']);

                PageDeleteAdmin($id,$lastname);

             } else {

                throw new Exception('Aucun identifiant cette Admin trouvé pour être supprimer');

             }

            }

            

            elseif($page == "management_car_brand") {
                management_car_brand();
                
            } 

            elseif($page == "add_car_brand") {
                add_car_brand();
              } 

              elseif($page == "edit_car_brand") {
                if (isset($_GET['id']) && $_GET['id'] > 0) {

                  $id = strval($_GET['id']);

                  $name = strval($_GET['name']);

                  $path = strval($_GET['path']);

                  edit_car_brand($id,$name,$path);

                } else {

                  throw new Exception('Aucun identifiant existe de cette marque de voiture');

                }

              } 


              elseif($page == "del_car_brand") {
                if (isset($_GET['id']) && $_GET['id'] > 0) {

                  $id = strval($_GET['id']);

                  $name = strval($_GET['name']);

                  del_car_brand($id,$name);

                } else {

                  throw new Exception('Aucun identifiant existe cette marque de voiture');
                
                }
                
              } 


              //category
              elseif($page == "management_category"){
                management_category();
              }

              elseif($page == "add_category"){
                add_category();
              }


              elseif($page == "edit_category"){
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                  
                  $id = strval($_GET['id']);

                  $name = strval($_GET['name']);
                  
                  edit_category($id, $name);

                } else {

                  throw new Exception('Aucun identifiant cette catégorie trouvé pour être modifier');

                }
                
              }

              elseif ($_GET['page'] == "del_category") {
                if(isset($_GET['id']) && $_GET['id'] > 0){


                  $id = strval($_GET['id']);

                  $name = strval($_GET['name']);


                  del_category($id,$name);


                } else {
                  
                  throw new Exception('Aucun identifiant cette catégorie trouvé pour être supprimer');

                }
              }

              //all rate
              elseif($page == "management_all_rate"){
                management_all_rate();
              }

              elseif ($page == "add_all_rate") {
                add_all_rate();
              }

              elseif ($page == "edit_all_rate") {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                  
                  $id = strval($_GET['id']);
                  $name = strval($_GET['name']);
                  $price = strval($_GET['price']);
                  $id_category = strval($_GET['id_category']);
                  edit_all_rate($id, $name, $price, $id_category);
                } else {

                  throw new Exception('Aucun identifiant de ceux tarif la a été trouvé pour être supprimer');


                }
              }

              elseif ($page == "del_all_rate") {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                  
                  $id = strval($_GET['id']);

                  $name = strval($_GET['name']);


                  del_all_rate($id,$name);

                } else {


                  throw new Exception('Aucun identifiant de ceux tarif pour être supprimé');

                }


              }


              elseif($page == "management_gallery_picture") {
                management_gallery_picture();
              } 


              elseif($page == "add_gallery_picture") {
                add_gallery_picture();
              } 

              elseif($page == "edit_gallery_picture") {
                if (isset($_GET['id']) && $_GET['id'] > 0) {

                  $id = strval($_GET['id']);

                  $name = strval($_GET['name']);

                  $path = strval($_GET['path']);

                  $description = strval($_GET['description']);

                  edit_gallery_picture($id,$name,$path,$description);

                } else {

                  throw new Exception('Aucun identifiant cette Photo a été trouvé pour être modifier');
               
                }

              } 


              elseif($page == "del_gallery_picture") {
                if(isset($_GET['id']) && $_GET['id'] > 0) {
                  
                $id = strval($_GET['id']);

                $name = strval($_GET['name']);

                del_gallery_picture($id,$name);

              } else {

                throw new Exception('Aucun identifiant cette Photo a été trouvé pour être supprimer');

                
              }
            }

            elseif($page == "preview_gallery_picture") {
                if(isset($_GET['id']) && $_GET['id'] > 0) {

                  $id = strval($_GET['id']);

 

                  preview_picture($id);


                } else {

                  throw new Exception('Aucun identifiant cette Photo trouvé');

                }


              } 


    } else {

      dashboard();

    }





} catch (Exception $e) {


    $errorMessage = $e->getMessage();
    require_once('../templates/error.php');

}
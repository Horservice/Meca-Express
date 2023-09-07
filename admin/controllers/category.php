<?php 
//controllers/category.php
require_once('../model/category.php');

function management_category(){

    $categorys = ShowCategory();
        require('../templates/management_category.php');


}   

function add_category(){

    $msg1=null;
    $msg2=null;

    if(isset($_POST['submit'])){
    
        if (!isset($_POST['name']) || empty($_POST['name'])){
            
            $msg1='<h2 class="text-danger">Merci de bien vouloir remplir le formulaire !</h2>';
    
         } else {
            
            $succes= AddCategory();

            if ($succes) {


                $msg2='<h2 class="my-5 text-success">Un nouvelle catégorie a été ajouté.</h2>';
    
    
            } else {
                $msg1='<h2 class="text-danger">Une erreur et survenue !</h2>';
    
            }


         }


    }

    require_once('../templates/add_category.php');
}


function edit_category($id,$name){

    $msg2=null;
    $msg1=null;


    if(isset($_POST['submit'])){

        if (!isset($_POST['name']) || empty($_POST['name']))
        {    
            $msg1='<h2 class="text-danger">tout les champs doit être remplit !</h2>';

        }  else {

            $succes = UpdateCategory($id,$name);


            if ($succes) {



                $msg1='<h2 class="text-success">La catégorie a été bien modifier </h2>';
    
    
            } else {
    
    
                $msg1='<h2 class="text-danger">Une erreur et survenue ! </h2>';
    
            }

        }

    }

    require('../templates/edit_category.php');

}

function del_category($id,$name){

    $nom = $name;
    $msg1 = null;

    if(isset($_POST['submit'])){
        $succes =  DeleteCategory($id);


        if ($succes) {



            $msg1='<h2 class="text-success">La catégorie a était bien supprimer </h2>';


        } else {


            $msg1='<h2 class="text-danger">Une erreur et survenue ! </h2>';

        }
    



    }

    require('../templates/del_category.php');

}

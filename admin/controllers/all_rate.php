<?php
//controllers//all_rate.php
require_once('../model/all_rate.php');
require_once('../model/category.php');
function management_all_rate(){

    $all_rates = ShowRate();
         require_once('../templates/management_all_rate.php');


}   


function add_all_rate(){

    $msg1=null;
    $msg2=null;

    $categorys = SelectCategory();


    if(isset($_POST['submit'])){

        if (!isset($_POST['name']) || empty($_POST['name'])
        || (!isset($_POST['price']) || empty($_POST['price']))
        || (!isset($_POST['id_category']) || empty($_POST['id_category'])))
        {
            
            $msg1='<h2 class="text-danger">Merci de bien vouloir remplir le formulaire !</h2>';
    
        } else {

            $succes = AddRate();
            
            if ($succes) {
                $msg2='<h2 class="my-5 text-success">Un nouvelle préstation a été ajouté ! </h2>';
            
            } else {
                $msg1='<h2 class="text-danger">Une erreur et survenue ! </h2>';
            }


        }

    }

        require_once('../templates/add_all_rate.php');

}

function edit_all_rate($id,$name,$price,$id_category){

    $msg=null;
    $categorys = SelectCategory();

    if(isset($_POST['submit'])){

        if (!isset($_POST['name']) || empty($_POST['name'])
        || (!isset($_POST['price']) || empty($_POST['price']))
        || (!isset($_POST['id_category']) || empty($_POST['id_category'])))
        {
            
            $msg='<h2 class="text-danger">Merci de bien vouloir remplir le formulaire !</h2>';
    
        } else {

           $succes = UpdateAllRate($id,$name,$price,$id_category);

            if ($succes) {
                $msg='<h2 class="my-5 text-success">Le tarif de la préstation a été bien changer ! </h2>';
            
            } else {
                $msg='<h2 class="text-danger">Une erreur et survenue ! </h2>';
            }



        }

    }



    require_once('../templates/edit_all_rate.php');


}


function del_all_rate($id,$name){

    $nom = $name;
    $msg1 = null;

    if(isset($_POST['submit'])){
        $succes =  DeleteAllRate($id);
        
        if ($succes) {
            $msg1='<h2 class="my-5 text-success"> Le tarif de la préstation : '.$nom.' a été bien supprimer </h2> ' ;
        } else {
            $msg1='<h2 class="text-danger">Une erreur et survenue ! </h2>';

        }
    
    }

    require_once('../templates/del_all_rate.php');

}
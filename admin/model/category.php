<?php
//model/Category.php

function dbConnectCategory(){

    try{
        $db = new PDO ('mysql:host=localhost;dbname=meca_express;charset=utf8','root','');
        return $db;
    } catch (Exception $e) {
            die('Erreur : ' .$e->getMessage());
    }

}



function ShowCategory(){

    $db = dbConnectCategory();
    $req = $db->query("SELECT `id`, `name` FROM `category`");
    $categorys = [];
    while (($row = $req->fetch())) {
        $category = [
        'id' => $row['id'],
        'name' => $row['name'],
        ];
        $categorys[] = $category;
        }
        return $categorys;

}




function SelectCategory(){

    $db = dbConnectCategory();
    $req = $db->query("SELECT `id`, `name` FROM `category`");
    $categorys = [];
    while (($row = $req->fetch())) {
        $category = [
        'id' => $row['id'],
        'name' => $row['name'],
        ];
        $categorys[] = $category;
        }
        return $categorys;

}



function AddCategory(){

    $db = dbConnectCategory();
    $name = htmlspecialchars($_POST['name']);
    $req = $db->prepare('INSERT INTO category (name) VALUES (:name)');
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->execute();

    $req = true;

    return $req;

}



function GetCategory($id){



    $db = dbConnectCategory();
    $req = $db->query("SELECT `id`, `name` FROM `category` WHERE id");
    $categorys = [];
    while (($row = $req->fetch())) {
        $category = [
        'id' => $row['id'],
        'name' => $row['name'],
        ];
        $categorys[] = $category;
        }
        return $categorys;

}


function UpdateCategory($id,$name){

    $db = dbConnectCategory();
    $name = htmlspecialchars($_POST['name']);

    $req = $db->prepare('UPDATE category SET name = :name WHERE id = :id');
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();

    $req = true;


    return $req ;

}

function DeleteCategory($id){

    $db = dbConnectCategory();
    $req = $db->prepare('DELETE FROM category WHERE id = :id');
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();

    $req = true;

    return $req; 

}
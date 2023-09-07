<?php
//model/car_brand.php

function dbConnectCar(){

    try{
        $db = new PDO ('mysql:host=localhost;dbname=meca_express;charset=utf8','root','');
        return $db;
    } catch (Exception $e) {
            die('Erreur : ' .$e->getMessage());
    }

}

function ShowCarbrand(){


    $db = dbConnectCar();
    $req = $db->query('SELECT `id`, `name`, `path` FROM `car_brand`');
    $car_brands = [];
    while (($row = $req->fetch())){

        $car_brand = [
            'id' => $row['id'],
            'name' => $row['name'],
            'path' => $row['path'],
        ];

        $car_brands[] = $car_brand;

    }

    return $car_brands;



}


function AddCarbrand(){

    $name = htmlspecialchars($_POST['name']);

    move_uploaded_file($_FILES['photo']['tmp_name'], '../../uploads/' . basename($_FILES['photo']['name']));
    $screenshot = '../../uploads/' . basename($_FILES['photo']['name']);


    $db = dbConnectCar();
    $req = $db->prepare('INSERT INTO car_brand(name, path) VALUES (:name, :path)');
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':path', $screenshot, PDO::PARAM_STR);
    $req->execute();

    $req = true;

    return $req;


    

}



function UpdateCarbrand($id,$name,$path){


    $id = strval($_GET['id']);
    $name = htmlspecialchars($_POST['name']);

    move_uploaded_file($_FILES['photo']['tmp_name'], '../../uploads/' . basename($_FILES['photo']['name']));
    $screenshot = '../../uploads/' . basename($_FILES['photo']['name']);
    $query = 'UPDATE car_brand SET name =:name, path = :path WHERE id = :id';
    $db = dbConnectCar();
    $req = $db->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_STR);
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':path',$screenshot , PDO::PARAM_STR);
    $req->execute();

    $req = true;

    return $req;
}


function DeleteCarbrand($id){

    $db = dbConnectCar();
    $req = $db->prepare('DELETE FROM car_brand WHERE id = :id');
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();

    $req  = true;

    return $req; 
}

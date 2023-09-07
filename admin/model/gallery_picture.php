<?php
//model/gallery_picture.php

function dbConnectGallery(){

    try{
        $db = new PDO ('mysql:host=localhost;dbname=meca_express;charset=utf8','root','');
        return $db;
    } catch (Exception $e) {
            die('Erreur : ' .$e->getMessage());
    }

}



function ShowGalleryPicture(){

    $db = dbConnectGallery();
    $req = $db->query("SELECT `id`, `name`, `description`, `path` FROM `gallery_picture`");
    $gallery_pictures = [];
    while (($row = $req->fetch())) {
        $gallery_picture = [
        'id' => $row['id'],
        'name' => $row['name'],
        'description' => $row['description'],
        'path' => $row['path'],
        ];
        $gallery_pictures[] = $gallery_picture;
        }
        return $gallery_pictures;


}


function AddGalleryPicture(){

    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);

    move_uploaded_file($_FILES['photo']['tmp_name'], '../../uploads/' . basename($_FILES['photo']['name']));
    $screenshot = '../../uploads/' . basename($_FILES['photo']['name']);

    $db = dbConnectGallery();
    $req = $db->prepare('INSERT INTO gallery_picture(name, description ,path) VALUES (:name, :description, :path)');

    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':description', $description, PDO::PARAM_STR);
    $req->bindValue(':path',$screenshot , PDO::PARAM_STR);
    $req->execute();

    $req = true;


    return $req;

}


function DeleteGalleryPicture($id){


    $db = dbConnectGallery();
    $req = $db->prepare('DELETE FROM gallery_picture WHERE id = :id');
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();

    $req = true;

    return $req;
}


function UpdateGalleryPicture($id,$name,$description){


    $db = dbConnectGallery();

    $id = strval($_GET['id']);
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    move_uploaded_file($_FILES['photo']['tmp_name'], '../../uploads/' . basename($_FILES['photo']['name']));
    $screenshot = '../../uploads/' . basename($_FILES['photo']['name']);
    $query = 'UPDATE gallery_picture SET name =:name, description = :description, path = :path WHERE id = :id';
    $req = $db->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_STR);
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':description', $description, PDO::PARAM_STR);
    $req->bindValue(':path',$screenshot , PDO::PARAM_STR);
    $req->execute();

    $req = true;

    return $req;

}





function getPreviewPicture($id){


    $db = dbConnectGallery();
    $id = strval($id);
    $req = $db->prepare('SELECT `id`, `name`, `description`, `path`  FROM `gallery_picture` WHERE id = :id');
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();

    $preview_pictures = [];
    while (($row = $req->fetch())){
        $Preview = [


            'id' => $row['id'],
            'name' => $row['name'], 
            'description' => $row['description'],
            'path' => $row['path'],
  
        ];


        $preview_pictures[] = $Preview;
        
    }
        return $preview_pictures;


}



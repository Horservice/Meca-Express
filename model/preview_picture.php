<?php
//model/preview_picture.php
function dbConnectPicture(){

    try{
        $db = new PDO ('mysql:host=localhost;dbname=meca_express;charset=utf8','root','');
        return $db;
    } catch (Exception $e) {
            die('Erreur : ' .$e->getMessage());
    
    }

}



function getPreviewPicture($id){

    $db = dbConnectPicture();
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
        


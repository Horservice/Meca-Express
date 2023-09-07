<?php
//model/admin.php


function dbConnectAdmin(){
    try{
        $db = new PDO ('mysql:host=localhost;dbname=meca_express;charset=utf8','root','');
        return $db;
    } catch (Exception $e) {
            die('Erreur : ' .$e->getMessage());
    }

}




function ShowAdmin(){

    $db = dbConnectAdmin();
    $req = $db->query("SELECT id, role , firstname, lastname, email  FROM admin");
    $admins = [];
    while (($row = $req->fetch())) {
        $admin = [
        'id' => $row['id'],
        'role' => $row['role'],
        'firstname' => $row['firstname'],
        'lastname' => $row['lastname'],
        'email' => $row['email'],
        ];
        $admins[] = $admin;
        }
        return $admins;
}


function AddAdmin(){
    

    $email = $_POST['email'];
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname= htmlspecialchars($_POST['firstname']);
    $role= htmlspecialchars($_POST['role']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $db = dbConnectAdmin();
    $req = $db->prepare('INSERT INTO admin(firstname, lastname, role, email, password) VALUES (:firstname, :lastname, :role ,:email, :password)');
    $req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $req->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $req->bindValue(':role', $role, PDO::PARAM_STR);
    $req->bindValue(':email', $email, PDO::PARAM_STR);
    $req->bindValue(':password', $password, PDO::PARAM_STR);
    $req->execute();

    $req = true;

    return $req;
}

function DeleteAdmin($id){
    
    $db = dbConnectAdmin();    
    $req = $db->prepare('DELETE FROM admin WHERE id = :id');
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();

    $req = true;

    return $req;
    

}

function UpdateAdmin($id, $firstname, $lastname, $email){


    $email = $_POST['email'];
    $role = htmlspecialchars($_POST['role']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $passwords = htmlspecialchars($_POST['password']);
    $password = password_hash($passwords, PASSWORD_DEFAULT);
    $id = strval($_GET['id']);

    $db = dbConnectAdmin();
    $req = $db->prepare('UPDATE admin SET role = :role ,lastname = :lastname, firstname =:firstname, email=:email, password = :password WHERE id = :id');
    $req->bindValue(':role', $role, PDO::PARAM_STR);
    $req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $req->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $req->bindValue(':email', $email, PDO::PARAM_STR);
    $req->bindValue(':password', $password, PDO::PARAM_STR);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();

    $req = true;

    return $req;


}




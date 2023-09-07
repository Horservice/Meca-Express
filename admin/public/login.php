<?php 
session_start();

require_once('../model/db_connect.php');

$db = dbConnect();
$msg = "";

if(isset($_POST['submit'])){

                
    if (!isset($_POST['lastname']) || empty($_POST['lastname'])
    || (!isset($_POST['password']) || empty($_POST['password']))){

        $msg="Merci de remplir les champ  !";
    } else { 

        $lastname = htmlspecialchars($_POST['lastname']);
        $password = htmlspecialchars($_POST['password']);
                                                        
        $req = $db->prepare("SELECT * FROM admin WHERE lastname = :lastname");
        $req->bindParam(':lastname', $lastname);
        $req->execute();

        if ($req->rowCount() > 0 ) {    

            $data = $req->fetchAll();   

            if (password_verify($password, $data[0]["password"])) {

                $_SESSION['lastname'] = $data[0]['lastname']; 
                $_SESSION['role'] = $data[0]['role'];
                header("Location: index.php");
            }

            if (!password_verify($password, $data[0]["password"])) {


                $msg='identifiant ou mots de passe incorrect';


            }

        } else {
        
            $msg='identifiant ou mots de passe incorrect';
            
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Connection - Meca Express </title>

</head>
<style>
    body{
        background-image: linear-gradient(#BEBFC5,rgba(201, 195, 195, 0.525),#BEBFC5);
    }

    .yellow{
        background-color: yellow;
        cursor: pointer;
    }
    

    .yellow:hover{
        background-color: rgba(255, 255, 0, 0.836);
    }
</style>

<body>


<div class="row w-100" style="height:calc(100vh - 60px);">
    <form class="col-3 m-auto needs-validation " action="" method="POST">
        <h1 class="h3 mb-3 fw-normal text-center">Connection</h1>
        <div class="">
        <label for="lastname">Identifiant</label>
            <input type="texte" class="form-control" placeholder="Identifiant" name="lastname">
        </div>


        <div class="">
        <label for="password">Mot de passe</label>

            <input type="password" class="form-control" placeholder="********" name="password" >
            <h5 class="w-100"><?= $msg ?></h5>

        </div>

        <button class="w-100 btn btn-lg btn yellow" type="submit" name="submit" >Se connecter</button>
    </form>
</div>



</body>
</html>


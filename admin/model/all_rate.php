    <?php
//model/all_rate.php

function dbConnectRate(){

    try{
        $db = new PDO ('mysql:host=localhost;dbname=meca_express;charset=utf8','root','');
        return $db;
    } catch (Exception $e) {
            die('Erreur : ' .$e->getMessage());
    }

}




function ShowRate(){

    $db = dbConnectRate();
    $req = $db->query('SELECT all_rate.id AS id, all_rate.name AS name, all_rate.price, all_rate.id_category, category.id AS category_id, category.name AS category_name FROM all_rate INNER JOIN category ON all_rate.id_category = category.id ORDER BY all_rate.id_category ASC;');
    $all_rates = [];
    
        while (($row = $req->fetch())) {
            $all_rate = [
                'id' => $row['id'],
                'name' => $row['name'],
                'price' => $row['price'],
                'id_category' => $row['id_category'],
                'category_id' => $row['category_id'],
                'category_name' => $row['category_name'],
            ];
    
            $all_rates[] = $all_rate;
        }

    
    return $all_rates;
}



function AddRate(){

    $name = htmlspecialchars($_POST['name']);
    $price = htmlspecialchars($_POST['price']);
    $category = htmlspecialchars($_POST['id_category']);

    $db = dbConnectRate();

    $req = $db->prepare('INSERT INTO all_rate(name, price, id_category) VALUE ( :name, :price, :id_category)');
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':price', $price, PDO::PARAM_STR);
    $req->bindValue(':id_category', $category, PDO::PARAM_STR);
    $req->execute();
    $req = true;

    return $req;
}


function UpdateAllRate($id,$name,$price,$id_category){

    $db = dbConnectRate();
    $name = htmlspecialchars($_POST['name']);
    $price = htmlspecialchars($_POST['price']);
    $id_category = htmlspecialchars($_POST['id_category']);
    $id = strval($_GET['id']);


    $req = $db->prepare('UPDATE all_rate SET name = :name, price = :price, id_category = :id_category WHERE id = :id');
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':price', $price, PDO::PARAM_STR);
    $req->bindValue(':id_category', $id_category, PDO::PARAM_STR);
    $req->execute();

    $req = true;

    return $req;
}

function DeleteAllRate($id){

    $db = dbConnectRate();
    $req = $db->prepare('DELETE FROM all_rate WHERE id = :id');
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();

    $req =true;

    return $req;

}
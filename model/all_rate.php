<?php 
//model/all_rate.php
function dbConnectRate() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=meca_express;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function GetPriceByCategory($idCategory) {
    $db = dbConnectRate();
    $statement = $db->prepare('SELECT name, price FROM all_rate WHERE id_category = :idCategory');
    $statement->execute(array(':idCategory' => $idCategory));

    $prices = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $prices[] = $row;
    }

    return $prices;
}


function ShowCategory() {
    $db = dbConnectRate();
    $statement = $db->query('SELECT id, name FROM category');
    $categorys = [];

    while (($row = $statement->fetch())) {
        $category = [
            'id' => $row['id'],
            'name' => $row['name'],
        ];
        $categorys[] = $category;
    }

    return $categorys;
}




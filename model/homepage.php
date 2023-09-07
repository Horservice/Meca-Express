<?php
//model/homepage.php
function dbConnectCar(){

    try{
        $db = new PDO ('mysql:host=localhost;dbname=meca_express;charset=utf8','root','');
        return $db;
    } catch (Exception $e) {
            die('Erreur : ' .$e->getMessage());
    
    }

}


function showCar(){

    $db = dbConnectCar();
    $statement = $db->query('SELECT `id`, `name`, `path` FROM `car_brand`');
    $car_brands = [];
    while (($row = $statement->fetch())){

        $car_brand = [

            'id' => $row['id'],
            'name' => $row['name'],
            'path' => $row['path'],

        ];

        $car_brands[] = $car_brand;


    }


    return $car_brands;


}
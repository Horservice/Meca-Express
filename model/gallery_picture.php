<?php
// model/gallery_picture.php
function dbConnectGallery(){

    try{
        $db = new PDO ('mysql:host=localhost;dbname=meca_express;charset=utf8','root','');
        return $db;
    } catch (Exception $e) {
            die('Erreur : ' .$e->getMessage());
    }

}


function ShowGallery()
{
    $db = dbConnectGallery();

    $query = $db->prepare('SELECT COUNT(*) AS nb_articles FROM gallery_picture');
    $query->execute();
    $result = $query->fetch();
    $nbArticles = (int)$result['nb_articles'];

    $parPage = 6;
    $pages = calculateTotalPages($nbArticles, $parPage);

    if (isset($_GET['pagenb']) && is_numeric($_GET['pagenb'])) {
        $currentPage = (int)$_GET['pagenb'];
        if ($currentPage < 1 || $currentPage > $pages) {
            $currentPage = 1; 
        }
    } else {
        $currentPage = 1;
    }

    $premier = ($currentPage * $parPage) - $parPage;

    $query = $db->prepare('SELECT * FROM gallery_picture LIMIT :premier, :parpage');
    $query->bindValue(':premier', $premier, PDO::PARAM_INT);
    $query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
    $query->execute();

    $gallery_pictures = [];
    while ($row = $query->fetch()) {
        $gallery_picture = [
            'id' => $row['id'],
            'name' => $row['name'],
            'description' => $row['description'],
            'path' => $row['path']
        ];

        $gallery_pictures[] = $gallery_picture;
    }

    return $gallery_pictures;
}

function getTotalArticles()
{
    $db = dbConnectGallery();

    $query = $db->prepare('SELECT COUNT(*) AS nb_articles FROM gallery_picture');
    $query->execute();
    $result = $query->fetch();
    $nbArticles = (int)$result['nb_articles'];

    return $nbArticles;
}

function calculateTotalPages($totalArticles, $articlesPerPage)
{
    return ceil($totalArticles / $articlesPerPage);
}
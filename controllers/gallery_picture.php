<?php
// controllers/gallery_picture.php
require_once('../model/gallery_picture.php');

function gallery_picture()
{
    $gallery_pictures = ShowGallery();
    $totalArticles = getTotalArticles(); 
    $pages = calculateTotalPages($totalArticles, 6); 
    if (isset($_GET['pagenb']) && is_numeric($_GET['pagenb'])) {
        $currentPage = (int)$_GET['pagenb'];
        if ($currentPage < 1 || $currentPage > $pages) {
            $currentPage = 1;
        }
    } else {
        $currentPage = 1;
    }


    $noPhotos ="";

    if (empty($gallery_pictures)) {
        $noPhotos = "Aucune photo disponible.";
    }

    require_once('../templates/gallery_picture.php');
}
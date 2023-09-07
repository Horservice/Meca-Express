<?php
// controllers/get_rate.php
require_once('../model/all_rate.php');




if (isset($_GET['id_category']) && is_numeric($_GET['id_category'])) {
    $idCategory = intval($_GET['id_category']);
    $price = GetPriceByCategory($idCategory);

    if (!empty($price)) {
        echo '<table class="table table-hover table-bordered ">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Prestation</th>';     
        echo '<th scope="col">Tarif Forfait (TCC)</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($price as $prices) {
            echo '<tr>';
            echo '<td class="w-75">' . htmlspecialchars($prices['name']) . '</td>';
            echo '<td>' . htmlspecialchars($prices['price']) . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p class="text-center">Prix non disponible pour cette catégorie.</p>';
    }
} else {
    echo '<p class="text-center">Catégorie invalide.</p>';
}

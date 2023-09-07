<?php
//Controllers/preview_picture.php
require_once('../model/gallery_picture.php');
function preview_picture($id){


    $preview_pictures = getPreviewPicture($id);


    
         require_once('../templates/preview_gallery_picture.php');


}   
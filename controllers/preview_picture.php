<?php

//controllers/preview_picture.php
require_once('../model/preview_picture.php');
function preview_picture($id){


    $preview_pictures = getPreviewPicture($id);
    
    require_once('../templates/preview_picture.php');


    
}




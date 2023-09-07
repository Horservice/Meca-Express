<?php
//controllers/all_rate.php
require_once('../model/all_rate.php');
function all_rate()
{




        
        $categorys = ShowCategory();

        $noCategorys = empty($categorys);


        require_once('../templates/all_rate.php');

}
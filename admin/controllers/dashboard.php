<?php 
//Controllers/dashboard.php
function dashboard(){

    $role = $_SESSION['role'];

    $lastname = $_SESSION['lastname'];

    require_once('../templates/dashboard.php');   

}
<?php
include "models/Home.php";
$db = new Database;
$db-> connect();

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}
else{
    $controller = '';
}
switch($controller){
    case 'home':{
        require_once('controllers/HomeController.php');
    }
    case 'member':{
        require_once('controllers/MemberController.php');
    }
}

?>
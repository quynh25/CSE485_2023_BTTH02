<?php
include "models/Article.php";
include 'models/DBConnection.php';
include "models/Member.php";
$db = new Database;
$db-> connect();

$con = new DB;
$con->connect();



if ( isset( $_GET[ 'controller' ] ) ) {
    $controller = $_GET[ 'controller' ];
} else {
    $controller = '';
}
switch( $controller ) {
    case 'home':{
        require_once('controllers/HomeController.php');
    }
    case 'article':{
        require_once('controllers/ArticleController.php');
    }
    case 'author':{
        require_once( 'controllers/author/index.php' );
    }
}

?>git
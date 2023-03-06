<?php

include 'models/DBConnection.php';
include "models/Home.php";
include "models/Article.php";
<<<<<<< HEAD
$conn = new Article();
$conn->connect();
=======
include "models/Category.php";

$db_article = new Article();
$db_article->connect();
>>>>>>> 1530ec7ec30d0b2397ef5164f6b355c364d0b4f8

// $db_article = new Article();
// $db_article->connect();

$db = new Database;
$db-> connect();

$con = new DB;
$con->connect();

$conn = new Dtbase;
$conn->connect();

if ( isset( $_GET[ 'controller' ] ) ) {
    $controller = $_GET[ 'controller' ];
} else {
    $controller = '';
}
switch( $controller ) {
    case 'home':{
        require_once('controllers/HomeController.php');
        break;
    }
     case 'article':{
        require_once('controllers/ArticleController.php');
        break;
     }
    case 'author':{
        require_once( 'controllers/author/index.php' );
        break;
    }
    case 'member':{
        require_once('controllers/MemberController.php');
    }
    case 'category':{
        require_once('controllers/category/index.php');
    }
}

?>
<?php
include "models/Article.php";
include "models/Member.php";
$db_article = new Article();
$db_article->connect_article();
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
    case 'article':{
        require_once('controllers/ArticleController.php');
    }
}

?>
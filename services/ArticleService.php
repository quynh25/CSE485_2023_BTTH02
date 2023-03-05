<?php
    // include "configs/DBConnection_article.php";
    // $db= new Database();
    // $db->connect();

    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }else{
        $controller ='';
    }

    switch($controller){
        case 'article':
            require_once('controllers/ArticleController.php');
        
    }
// include "configs/DBConnection_article.php";
// include("models/Article.php");
// class ArticleService{
//     public function getAllArticles(){
//         // 4 bước thực hiện
//        $dbConn = new DBConnection();
//        $conn = $dbConn->getConnection();

//         // B2. Truy vấn
//         $sql = "SELECT * FROM baiviet INNER JOIN theloai ON baiviet.ma_tloai=theloai.ma_tloai 
//                 INNER JOIN tacgia on baiviet.ma_bviet=tacgia.ma_tgia";
//         $stmt = $conn->query($sql);

//         // B3. Xử lý kết quả
//         $articles = [];
//         while($row = $stmt->fetch()){
//             $article = new Article($row['title'], $row['summary'], $row['name']);
//             array_push($articles,$article);
//         }
//         // Mảng (danh sách) các đối tượng Article Model

//         return $articles;
//     }
// }
?>
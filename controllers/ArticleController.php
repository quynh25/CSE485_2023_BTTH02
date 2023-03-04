<?php
// class ArticleController{
//     // Hàm xử lý hành động index
//     public function index(){
//         // Nhiệm vụ 1: Tương tác với Services/Models
//         echo "Tương tác với Services/Models from Article";
//         // Nhiệm vụ 2: Tương tác với View
//         echo "Tương tác với View from Article";
//     }

//     public function add(){
//         // Nhiệm vụ 1: Tương tác với Services/Models
//         // echo "Tương tác với Services/Models from Article";
//         // Nhiệm vụ 2: Tương tác với View
//         include("views/article/add_article.php");
//     }

//     public function list(){
//         // Nhiệm vụ 1: Tương tác với Services/Models
//         // echo "Tương tác với Services/Models from Article";
//         // Nhiệm vụ 2: Tương tác với View
//         include("views/article/list_article.php");
//     }
//}

    // include "models/Article.php";

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action ='';
    }

    $thanhcong = array();
    switch($action){
        case 'list_article':
            require_once('views/article/list_article.php');
            break;
        case 'add_article':
            // if(isset($_POST['add_arrticle'])){
            //     $tieude = $_POST['tieude'];
            //     $tenbhat = $_POST['tenbhat'];
            //     $matloai = $_POST['matloai'];
            //     $tomtat = $_POST['tomtat'];
            //     $noidung = $_POST['noidung'];
            //     $matgia = $_POST['matgia'];
            //     $ngay = $_POST['ngay'];
            //     $anh = $_FILE['anh']['name'];
            //     $anh_tmp = $_FILES['anh']['tmp_name'];
                
            //     if($db_article->InsertData($tieude, $tenbhat, $matgia, $tomtat, $noidung, $matgia,$ngay,$anh)){
            //         $thanhcong[] = 'add_success';
            //     };
            //     move_uploaded_file($hinhanh_tmp,'./images/songs/'.$hinhanh);
            // }
            require_once('views/article/add_article.php');
            break;
        case 'edit':
            require_once('views/article/edit_article.php');
            break;
        case 'delete':
            require_once('views/article/del_article.php');
            break;
        default:{
            require_once('views/article/list_article.php');
            break;
        }
    }
?>
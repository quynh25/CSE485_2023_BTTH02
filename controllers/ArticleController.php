<?php

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action ='';
    }

    $thanhcong = array();
    switch($action){
       
        case 'add':{

            $sql_tloai = "theloai";
            $result_tloai = $db_article->getAllData($sql_tloai);

            $sql_tgia = "tacgia";
            $result_tgia = $db_article->getAllData($sql_tgia);
      
            if(isset($_POST['add_arrticle'])){
                $tieude = $_POST['tieude'];
                $tenbhat = $_POST['tenbhat'];
                $matloai = $_POST['matloai'];
                $tomtat = $_POST['tomtat'];
                $noidung = $_POST['noidung'];
                $matgia = $_POST['matgia'];
                $ngay = $_POST['ngayviet'];
                $hinhanh = $_FILE['hinhanh']['name'];
                $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
                move_uploaded_file($hinhanh_tmp,'assets/images/songs/'.$hinhanh);
                // $db_article->InsertData($tieude, $tenbhat, $matgia, $tomtat, $noidung, $matgia,$ngayviet,$hinhanh);
                if($db_article->InsertData($tieude, $tenbhat, $matgia, $tomtat, $noidung, $matgia,$ngayviet,$hinhanh)){
                    $thanhcong[] = 'add_success';
                };
                
            }
            require_once('views/article/add_article.php');
            break;
        }
            
        case 'edit':{
            $id = $_GET['id'];
            $tblTable = "baiviet WHERE ma_bviet= '$id'";
            $data = $db_article->getAllData($tblTable);

            if(isset($_POST['update'])){
                $tieude = $_POST['tieude'];
                $tenbhat = $_POST['tenbhat'];
                $matloai = $_POST['matloai'];
                $tomtat = $_POST['tomtat'];
                $noidung = $_POST['noidung'];
                $matgia = $_POST['matgia'];
                $ngay = $_POST['ngayviet'];
                $hinhanh = $_FILE['hinhanh']['name'];
                $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

                // if($_FILES['anh']['name'] == ''){
                //         $image = $row_update['tieude'];
                //        }else{
                //             $image = $row_update['tieude'];
                //        }
                //        $hinhanh = $_FILES['anh']['name'];
                    //    $hinhanh_tmp = $_FILES['anh']['tmp_name'];

                if($db_article->UpdateData($id,$tieude, $tenbhat, $matgia, $tomtat, $noidung, $matgia,$ngayviet,$hinhanh)){
                    $thanhcong[] = 'update_success';
                    
                    $tblTable = "baiviet WHERE ma_bviet= '$id'";
                    $data = $db_article->getAllData($tblTable);
                }
            }
            require_once('views/article/edit_article.php');
            break;
        }
           
        case 'delete':{
            if(isset($_POST['delete'])){
                $ma_bviet = $_GET['id'];
                if($db_article->DeleteData($ma_bviet)){
                    $thanhcong[] = 'del_success';
                }
            }
            require_once('views/article/del_article.php');
            break;
        }
        case 'list':{
            $tblTable = "baiviet 
            INNER JOIN theloai ON baiviet.ma_tloai= theloai.ma_tloai
            INNER JOIN tacgia ON tacgia.ma_tgia= baiviet.ma_tgia ORDER BY ma_bviet ASC";
            $data = $db_article->getAllData($tblTable);
            require_once('views/article/list_article.php');
            break;
       }

        default:{
            require_once('views/article/list_article.php');
            break;
        }
    }
?>
<?php
// include "models/DBConnection.php";


if ( isset( $_GET[ 'action' ] ) ) {
    $action = $_GET[ 'action' ];
} else {
    $action = '';
}

$thanhcong = array();

switch( $action ) {
    case 'add': {
        if(isset($_POST['insert'])){
            $tentloai = $_POST['txtName'];

            if($con->insertData($tentloai)){
                $thanhcong[] = 'add_success';
            }
        }
        require_once( 'views/categories/add_category.php' );
        break;
    }
    case 'edit': {
        $id = $_GET['id'];
        $tblTable = "tacgia WHERE ma_tloai= '$id'";
        $data = $con->getAllData($tblTable);

        if(isset($_POST['update'])){
            $tentloai = $_POST['txtName'];

            if($con->updateData($id,$tentloai)){
                $thanhcong[] = 'update_success';
                
                $tblTable = "tloai WHERE ma_tloai= '$id'";
                $data = $con->getAllData($tblTable);
            }
        }
        require_once( 'views/categories/edit_category.php' );
        break;
    }
    case 'del': {
        if(isset($_POST['delete'])){
            $matloai = $_GET['id'];
            if($con->deleteData($matloai)){
                $thanhcong[] = 'del_success';
            }
        }
        require_once( 'views/author/delete_category.php' );
        break;
    }
    case 'home':{
        $tblTable = "theloai";
        $data = $con->getAllData($tblTable);
        require_once( 'views/categories/category.php' );
        break;
 
    }
    default: {
        $tblTable = "theloai";
        $data = $con->getAllData($tblTable);
        require_once( 'views/categories/category.php' );
        break;
    }

}
?>
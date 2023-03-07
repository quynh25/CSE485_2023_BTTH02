<?php
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

            if($conn->insertTL($tentloai)){
                $thanhcong[] = 'add_success';
            }
        }
        require_once( 'views/categories/add_category.php' );
        break;
    }
    case 'edit': {
        $id = $_GET['id'];
        $tblTable = "theloai WHERE ma_tloai= '$id'";
        $data = $conn->getAllData($tblTable);

        if(isset($_POST['update'])){
            $tentloai = $_POST['txtName'];

            if($conn->updateTL($id,$tentloai)){
                $thanhcong[] = 'update_success';
                
                $tblTable = "theloai WHERE ma_tloai= '$id'";
                $data = $conn->getAllData($tblTable);
            }
        }
        require_once( 'views/categories/edit_category.php' );
        break;
    }
    case 'del': {
        if(isset($_POST['delete'])){
            $matloai = $_GET['id'];
            if($conn->deleteTL($matloai)){
                $thanhcong[] = 'del_success';
            }
        }
        require_once( 'views/categories/delete_category.php' );
        break;
    }
    case 'home':{
        $tblTable = "theloai";
        $data = $conn->getAllData($tblTable);
        require_once( 'views/categories/category.php' );
        break;
 
    }
    default: {
        $tblTable = "theloai";
        $data = $conn->getAllData($tblTable);
        require_once( 'views/categories/category.php' );
        break;
    }

}
?>
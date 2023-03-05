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
            $tentgia = $_POST['txtName'];
            $hinhtgia = $_POST['txtLink'];

            if($con->insertData($tentgia,$hinhtgia)){
                $thanhcong[] = 'add_success';
            }
        }
        require_once( 'views/author/add_author.php' );
        break;
    }
    case 'edit': {
        require_once( 'views/author/edit_author.php' );
        break;
    }
    case 'home':{
        $tblTable = "tacgia";
        $con->getData($tblTable);
        $data = $con->getAllData($tblTable);
        require_once( 'views/author/author.php' );
        break;
 
    }
    default: {
        require_once( 'views/author/author.php' );
        break;
    }

}
?>
<?php
// include "models/DBConnection.php";


if ( isset( $_GET[ 'action' ] ) ) {
    $action = $_GET[ 'action' ];
} else {
    $action = '';
}
switch( $action ) {
    case 'add': {
        if(isset($_POST['insert'])){
            $tentgia = $_POST['txtName'];
            $hinhtgia = $_POST['txtLink'];

            $con->insertData($tentgia,$hinhtgia);
        }
        require_once( 'views/author/add_author.php' );
        break;
    }
    case 'edit': {
        require_once( 'views/author/edit_author.php' );
        break;
    }
    default: {
        require_once( 'views/author/author.php' );
        break;
    }

}
?>
<p class = 'a'>Bui Duc Giang</p>
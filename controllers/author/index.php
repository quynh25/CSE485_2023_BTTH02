<?php
if ( isset( $_GET[ 'action' ] ) ) {
    $action = $_GET[ 'action' ];
} else {
    $action = '';
}
switch( $action ) {
    case 'home': {
        require_once( 'views/author/author.php' );
        break;
    }
    case 'add': {
        require_once( 'views/author/add_author.php' );
        break;
    }
    case 'edit': {
        require_once( 'views/author/edit_author.php' );
        break;
    }
    
}
?>
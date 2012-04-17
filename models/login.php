<?php
    function login($username, $password){
        $res = mysql_query (
              'SELECT
                 id, username
               FROM
                 labusrs
               WHERE
                 username = "' .$username. '"
               AND password = "' .$password. '"
               LIMIT 1'
        );
    if ( mysql_num_rows ($res) == 1 ) {
        $user = mysql_fetch_array( $res );
        $_SESSION[ 'cms_username' ] = $_POST[ 'username'];
        $_SESSION[ 'cms_userid' ] = $user[ 'id' ];
        header( 'Location: ../index.php' );
    }
    else{
       header('Location: ../login.php?err=1');
    }
    }
?>

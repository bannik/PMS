<?php
     include_once '../opnsession.php';
     $username = $_POST['username'];
     $password = sha1 ($_POST[ 'password' ]);
     if(isset($_POST['username'])){
         login($username, $password);
     }
     else{
        header ( 'Location:login.php?err=1' );
   }
?>

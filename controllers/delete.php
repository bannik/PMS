<?php
include_once'../opnsession.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    deleteproject($id);
}
?>

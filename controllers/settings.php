<?php
include_once'../opnsession.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $place = "../images/projects/";
    $title = $_POST['title'];
    $text = $_POST['text'];
    $link = $_POST['link'];
    $created = $_POST['created'];
    if (is_dir($place)){
        $filename = $_FILES['image'] ['tmp_name'];
        if(isset($filename)){
            $uniqueFile = $_FILES['image']['name'];
            move_uploaded_file($filename, $place . $uniqueFile);
        }
        changeproject($id, $title, $text, $link, $created);
        }
}
?>

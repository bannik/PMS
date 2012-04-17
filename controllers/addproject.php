<?php
include_once '../opnsession.php';
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
    addproject($title, $uniqueFile, $text, $created, $link);
}
?>

<html>
<head>
<title>*Bannik's lab</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="shortcut icon" href="images/favico.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="*Bannik" />
</head>
<?php
include_once 'opnsession.php';
if(isset($_SESSION['cms_userid'])){
?>
<body>
<div id="header">
    <ul>
    <li><a href="index.php">Change Projects</a></li>
    <li><a href="add.php"> Add a Project</a></li>
    <li id="logout"><a href="controllers/logout.php">Log out</a></li>
    </ul>
</div>

<?php
}
?>

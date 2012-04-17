<?php
include_once'header.php';
if(isset($_SESSION['cms_userid'])){
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $rows = singleproject($id);
    foreach($rows as $row){
?>
    <h2>Edit your project</h2>
    <div class="container" id="settings">
    <img src="images/projects/<?=$row['image']?>"/>
    <form action="controllers/settings.php?id=<?= $id; ?>" enctype="multipart/form-data" method="post">
    <label for="image">Chose a screenshot for your project:</label>
    <input type="file" name="image"/><br/>
    <label for="text"> Describe the project:</label>
    <textarea name="text"><?= $row['text']; ?></textarea>
    <label for="title"> Name your project:</label>
    <input type="text" name="title" value="<?=$row['title'];?>"/><br/>
    <label for="link">Link your project:</label>
    <input type="text" name="link" value="<?= $row['link']; ?>"/><br/>
    <label for="created">Realise date</label>
    <input type="date" name="created" value="<?= $row['created']; ?>"/><br/>
    <input type="submit" value="Change"/>
    </form>
    </div>
<?
    }
}
else{
    header('Location: index.php');
}
}
else{
    header('Location: login.php');
}

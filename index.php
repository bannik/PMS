<?php
include_once'header.php';
if(isset($_SESSION['cms_userid'])){
    $rows = ProjectList();
    foreach ($rows as $row){
?>
    <div id="project">
    <a href="controllers/delete.php?id=<?= $row['id'];?>" class="set"><img src="images/trash.png" onmouseover="this.src='images/trash_hover.png'" onmouseout="this.src='images/trash.png'"/></a>
    <a href="settings.php?id=<?=$row['id'];?>" class="set"><img src="images/set.png" onmouseover="this.src='images/set_hover.png'" onmouseout="this.src='images/set.png'"/></a>
    <img src="images/projects/<?= $row['image']; ?>"/>
    <p id="prtitle"><?= htmlspecialchars($row['title']); ?></p>
    <p id="prtext"><?= nl2br(htmlspecialchars($row['text'])); ?></p>
    <a href="http://<?= htmlspecialchars($row['link']); ?>" id="link">Visit the site</a>
    <p id="created"><?= $row['created'] ?></p>
    </div>
<?php
    }
    if(empty($row)){
        include_once'add.php';
    }
}
else{
    include_once'login.php';
}
    include_once'footer.php';
?>

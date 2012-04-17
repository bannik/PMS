<?php
    include_once 'header.php';
    if(isset($_SESSION['cms_userid'])){
?>
        <h2>Add a new project</h2>
        <div class="container">
        <form action="controllers/addproject.php" method="post" enctype="multipart/form-data"><br/>
        <div>
        <label for="text">Project Describtion:</label><br/>
        <textarea name="text" required placeholder="A few words about the project"></textarea><br/></div>
        <label for="image">Project Preview:</label><br/>
        <input type="file" name="image" required /><br/>
        <label for="title">Project Title:</label><br/>
        <input type="text" name="title" required placeholder="The title of the project"/><br/>
        <label for="link">"link" your Project:</label><br/>
        <input type="text" name="link" required placeholder="a link for the project"/><br/>
        <label for="created">Date Project Created:</label><br/>
       <input type="date" name="created"/></br> 
        <input type="submit" value="Add"/>
        </form>
        </div>
        <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
        <script src="script/calendar/mootools-core-1.4.2-full-compat.js"></script>
        <script src="script/calendar/calendar.js"></script>
<?php
    }
    include_once'footer.php';
?>

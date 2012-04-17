<?php
    include_once'header.php';
if(isset($_SESSION['userid'])){
    header('Location:index.php');
}
else{
?>
    <h1>Portfolio Managment System</h1>
    <div id="login">
    <h2>Log into the universe</h2>
<?php
    if(isset($_GET['err']) && $_GET['err'] == '1'){
?>
        <p id="oups">Oups! Something went wrong! Check out your information</p>
<?php
    }
?>
    <form action="controllers/login.php" method="post">
    <label for="username">Username:</label><br/>
    <input type="text" placeholder="Username" name="username" required/><br/>
    <label for="password">Password:</label><br/>
    <input type="password" placeholder="Password" name="password" required /><br/>
    <input type="submit" value="Submit"/>
    </form>
    </div>
    <a href="http://dev.bannik.eu/" id="back">&larr; Back to the lab</a>
<?php
}
?>

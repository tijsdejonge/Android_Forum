<?php
include_once "app/database/database.php";
new database();
?>
<link rel="stylesheet" href="css/register.css">

<button class="buttonback"><a href="index.php">go back</a></button>

<div class="card">
    <form method="post">
        <input name="username" placeholder="username" type="text">
        <input name="password" placeholder="password" type="password">
        <br>
        <input type="submit" value="login">
    </form>
</div>
<?php
    if(isset($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = sha1($_POST['password']);

        $result = database::execute(" SELECT * FROM users WHERE username = '$username' AND password = '$password'");//WHERE username = '$username' AND password = '$password'
        if(count($result) == 1){
            $_SESSION['ID'] = $result[0]['ID'];

        }else {
            echo " please first register an account";
        }
    }

    if(isset($_SESSION['ID'])){
        // als er ingelogd is.

    }
?>

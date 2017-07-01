<?php
include_once "app/database/database.php";
new database();

$message = "<li><a style='margin-left: 0'>".$_SESSION['ID']."</a></li>";
?>
<div class="header">
    <p class="welcome">Android at it's best</p>
</div>


<div class="nav">
    <?php
    echo "<ul>";
        if(empty($_SESSION)) {

            echo'<li ><a style = "margin-left: 0" href = "/android_forum/src/login.php" > Login</a ></li >';

            echo'<li ><a style = "margin-left: 0" href = "/android_forum/src/register_form.php" >register</a ></li >';
    }else {
            echo $message;
    }
    ?>
        <li><a style="margin-left: 0" href="#">Thema's</a></li>
    </ul>
</div>

<div class="content">

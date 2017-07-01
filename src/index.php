<?php
include_once "app/database/database.php";
include_once "app/template/head.php";
new database();
$data = database::fetch_topics();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>android at it's best</title>
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div>
        <?php
        foreach ($data as $row){
            echo "<div class='thema-container'>";
            echo "<div class='thema-header'>";
            echo '<h2 class="subject"><a href="#">'.$row['subject'].'</a></h2>';
            echo '</div>';
            echo '<h3 class="description">'.$row['description'].'</h3>';
            echo '<h4 class="created-at">'.$row['created_at'].'</h4>';
            echo '</div>';
            };
        ?>
</div>

</body>
</html>
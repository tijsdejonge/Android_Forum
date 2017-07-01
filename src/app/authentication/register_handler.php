<?php
include_once('../helpers_functions/helper_functions.php');
include_once ('../database/database.php');
new database();


// 1. Controleren of dit scriptje is opgestart vanuit ons formulier
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ' . url('../index.php'));
    exit(0);
}

// 2. Data uit het formulier binnenhalen in php variablen
$username = $_POST['username'];
$email = $_POST['email'];
$password = sha1($_POST['password']);

// 3. Connectie met de database maken


// 4. Controle op juistheid van ingevulde gegevens en of username/password voorkomen in database
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
    }
    else{
        echo 'Vul alle velden in AUB';
        die;
    }
}


// 5. Opslaan van formulierdata in de database
if(!empty($username) && !empty($password) && !empty($email);)){


    $result = database::execute('INSERT INTO users(username, email, password)
    VALUES (:username, :email, :password)',
    [
        ':username' => $username,
        ':email' => $email,
        ':password' => $password
    ]);

// 6. Doorlinken naar de homepage
header('Location: ' . url('/android_forum/src/android_forum/index.php'));
exit(0);

?>
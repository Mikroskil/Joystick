<?php
    require_once 'connect.php';
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT username FROM user WHERE username='$username' AND password='$password'";
    $result = mysql_query($query);
    if (mysql_num_rows($result) == 0) {
        $_SESSION['error'] = 'Username or password is invalid';
		header('Location:login.php');
    }
    else {
        $_SESSION['login'] = $username;
		header('Location:index.php');
    }
?>

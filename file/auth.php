<?php
    require_once 'connect.php';
    session_start();
    $username = $_POST['no_kamar'];
    $password = $_POST['password'];
    $query = "SELECT nama_pemilik FROM apartemen WHERE no_kamar='$username' AND password='$password'";
    $result = mysql_query($query);
    if (mysql_num_rows($result) == 0) {
        $error = 'Username or password is invalid';
		header('Location:login.php?error=' . $error);
    }
    else {
	 	session_start();
        $_SESSION['login'] = $username;
		header('Location:main.php');
    }
?>

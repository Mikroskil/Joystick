<?php
    session_start();
    if (isset($_SESSION['login'])) {
        if ($_SESSION['no_kamar'] != "000") {
			header ('Location:error.php');
        }   
    }
    else {
        $_SESSION['error'] = 'Please login to continue';
        header('Location: login.php?redirect='.$_SERVER['REQUEST_URI']);
    }
?>

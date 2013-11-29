<?php
	session_start();
    require_once 'connect.php';
    $id = $_POST['no_kamar'];
    $password = $_POST['password'];
    $query = "SELECT nama_pemilik FROM apartemen WHERE no_kamar='$id' AND password='$password'";
    $result = mysql_query($query);
    if (mysql_num_rows($result) == 0) {
        $_SESSION['error'] = 'Username or password is invalid';
		header('Location:login.php?error=' . $_SESSION['error']);
    }
    else {
	 	session_start();
        $_SESSION['login'] = 1;
		$pilihtabel = mysql_query("SELECT * FROM apartemen");
		while (($row = mysql_fetch_array($pilihtabel)))
		{
			if ($row['no_kamar'] == $id && $row['password'] == $password)
				$_SESSION['nama'] = $row['nama_pemilik'];
		}
		
		$_SESSION['no_kamar'] = $id;
		$_SESSION['password'] = $password;
		header('Location:main.php');
    }
?>

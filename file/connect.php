<?php
    $dbhost = 'localhost';
    $user = 'root';
    $pass = '';
    $connect = mysql_connect($dbhost, $user, $pass);
    mysql_select_db('suvabewe', $connect);
?>
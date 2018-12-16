<?php
session_start();
$un=$_SESSION['Name'];
session_destroy();
unset($_SESSION['Name']);
header('location:index.html');
?>
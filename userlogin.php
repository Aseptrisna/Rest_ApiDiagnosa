<?php
include './controller/user.php';
include_once('./config/koneksi.php');
$Email=$_POST['email'];
$Password=md5($_POST['password']);
userlogin($Email,$Password,$con);
?>
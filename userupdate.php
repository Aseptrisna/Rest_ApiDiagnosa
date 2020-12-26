<?php
include './controller/user.php';
include_once('./config/koneksi.php');
$Email=$_POST['email'];
$Password=md5($_POST['password']);
$Nama=$_POST['nama'];
$Id=$_POST['id'];
userupdate($Id,$Nama,$Email,$Password,$con);
?>
<?php
include './controller/penyakit.php';
include_once('./config/koneksi.php');
$id=$_GET['id'];
getSolusi($id,$con);
?>
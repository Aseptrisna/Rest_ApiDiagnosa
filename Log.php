<?php
date_default_timezone_set('Asia/Jakarta');
$data=$tanggal=date('d-m-Y');
$status="true";
$message="Selamat Datang";
$response = ['status' => $status, 'message' => $message,'Tangal'=>$tanggal];
echo json_encode($response);
?>
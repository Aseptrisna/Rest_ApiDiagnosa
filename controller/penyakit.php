<?php
function getPenyakit($con){
    $query = "SELECT * FROM tb_penyakit";
    $result = mysqli_query($con,$query);
    $array_data = array();
    while($baris = mysqli_fetch_assoc($result)){
      $array_data[]=null;
    }
    if (is_null($array_data)) {
        $status = false;
        $response = ['status' => $status, 'penyakit' => $array_data];
        echo json_encode($response);
    } else {
        $status = true;
        $response = ['status' => $status, 'penyakit' => $array_data];
        echo json_encode($response);
    }
}
function getCiri($id,$con){
    $query = "SELECT * FROM tb_ciri";
    $result = mysqli_query($con,$query);
    $array_data = array();
    while($baris = mysqli_fetch_assoc($result)){
      $array_data[]=$baris;
    }
    if (is_null($array_data)) {
        $status = false;
        $response = ['status' => $status, 'ciri' => $array_data];
        echo json_encode($response);
    } else {
        $status = true;
        $response = ['status' => $status, 'ciri' => $array_data];
        echo json_encode($response);
    }
}
function getSolusi($id,$con){
    $query = "SELECT * FROM tb_solusi";
    $result = mysqli_query($con,$query);
    $array_data = array();
    while($baris = mysqli_fetch_assoc($result)){
      $array_data[]=$baris;
    }
    if (is_null($array_data)) {
        $status = false;
        $response = ['status' => $status, 'solusi' => $array_data];
        echo json_encode($response);
    } else {
        $status = true;
        $response = ['status' => $status, 'solusi' => $array_data];
        echo json_encode($response);
    }
}


?>
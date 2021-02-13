<?php
function getdatasensor($con){
    $query = "SELECT * FROM tb_sensor";
    $result = mysqli_query($con,$query);
    $array_data = array();
    while($baris = mysqli_fetch_assoc($result)){
      $array_data[]=$baris;
    }
    if (is_null($array_data)) {
        $status = false;
        $response = ['status' => $status, 'sensor' => $array_data];
        echo json_encode($response);
    } else {
        $status = true;
        $response = ['status' => $status, 'sensor' => $array_data];
        echo json_encode($response);
    }
}

?>
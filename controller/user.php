<?php
// login
function userlogin($Email,$Password,$con){
    $query = "SELECT * FROM user WHERE email='$Email' AND password='$Password'";
    $result = mysqli_query($con,$query);
    $array_data = array();
    while($baris = mysqli_fetch_assoc($result)){
      $array_data[]=$baris;
    }
    if (is_null($array_data)) {
        $status = false;
        $response = ['status' => $status, 'user' => $array_data];
        echo json_encode($response);
    } else {
        $status = true;
        $response = ['status' => $status, 'user' => $array_data];
        echo json_encode($response);
    }
}
function userregister($nama,$email,$password,$con){
    class usr{}
    $num_rows = mysqli_num_rows(mysqli_query($con, "SELECT * FROM user WHERE email='".$email."'"));
    if ($num_rows == 0){
        $query = mysqli_query($con, "INSERT INTO user (nama,email,password) VALUES('$nama','$email','$password')");
        if ($query){
            $response = new usr();
            $response->status = "true";
            $response->message = "Register berhasil, silahkan Masuk";
            die(json_encode($response));

        } else {
            $response = new usr();
            $response->status = "true";
            $response->message = "Mohon Maaf Register Gagal";
            die(json_encode($response));
        }
    } else {
        $response = new usr();
        $response->status = "false";
        $response->message = "Email Anda Sudah Terdaftar";
        die(json_encode($response));
    }
}
// mysqli_close($con);

// }
function userupdate($id,$nama,$email,$password,$con){
    class usr{}
    $query = mysqli_query($con, "UPDATE user SET nama='$nama',email='$email',password='$password' WHERE id='$id'");
        if ($query){
            $response = new usr();
            $response->status = "true";
            $response->message = "Update berhasil";
            die(json_encode($response));

        } else {
            $response = new usr();
            $response->status = "true";
            $response->message = "Mohon Maaf Update Gagal";
            die(json_encode($response));
        }
}



?>
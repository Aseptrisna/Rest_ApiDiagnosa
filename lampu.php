<?php  
$light = $_GET['light'];
if($light == "on") {
  $file = fopen("lampu.json", "w") or die("can't open file");
  fwrite($file, '{"lampu": "on"}');
  fclose($file);
  $status="true";
  header('Content-Type: application/json');
  $response = ['status' => $status, 'message' => $light];
  echo json_encode($response);

} 
else if ($light == "off") {  
  $file = fopen("lampu.json", "w") or die("can't open file");
  fwrite($file, '{"lampu": "off"}');
  fclose($file);
  $status="true";
  header('Content-Type: application/json');
  $response = ['status' => $status, 'message' => $light];
  echo json_encode($response);
}
?>


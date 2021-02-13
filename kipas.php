<?php  
$light = $_GET['light'];
if($light == "on") {
	// echo"suksess"; 
  $file = fopen("kipas.json", "w") or die("can't open file");
  fwrite($file, '{"kipas": "on"}');
  fclose($file);
  $status="true";
  header('Content-Type: application/json');
  $response = ['status' => $status, 'message' => $light];
  echo json_encode($response);

} 
else if ($light == "off") {  
  $file = fopen("kipas.json", "w") or die("can't open file");
  fwrite($file, '{"kipas": "off"}');
  fclose($file);
  $status="true";
  header('Content-Type: application/json');
  $response = ['status' => $status, 'message' => $light];
  echo json_encode($response);
}
?>


<?php
  $servername = "161.97.164.70";
  $username = "admin3877_admin3877";
  $password = "eih#M_n+00f#";
  $dbname = "admin3877_wl";
  
  $wladdress = $_POST["wladdress"];
  $status = $_POST["status"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($_POST['wladdress'] !== '') {
$sql = "UPDATE wk  SET status = '$status' where  wladdress = '$wladdress'";


if ($conn->query($sql) === TRUE) {
  echo "good";
} else {
  echo "bad";
}
}else {
  echo "error";
}

$conn->close();
?>
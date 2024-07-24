<?php
  $servername = "161.97.164.70";
  $username = "admin3877_admin3877";
  $password = "eih#M_n+00f#";
  $dbname = "admin3877_wl";
  
  $wladdress = $_POST["wladdress"];
  $twitterid = $_POST["twitterid"];
  $discordid = $_POST["discordid"];
  $telegramid = $_POST["telegramid"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($_POST['wladdress'] !== '') {
$sql = "INSERT INTO wk (wladdress, twitterid, discordid, telegramid, email, comment, status)
		VALUES ('$wladdress', '$twitterid', '$discordid', '$telegramid', '$email', '$comment', 1)";

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
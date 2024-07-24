
<?php
  $servername = "161.97.164.70";
  $username = "admin3877_admin3877";
  $password = "eih#M_n+00f#";
  $dbname = "admin3877_wl";
  $searchquery = trim($_POST['search_text']); //input for search
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

$sql = "SELECT * FROM wk WHERE status = 1";
$result = $conn->query($sql);
  $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray, JSON_PRETTY_PRINT);

// if ($result->num_rows > 0) {
// echo '1';
// } else {
// echo '2';
// }
$conn->close();
?>

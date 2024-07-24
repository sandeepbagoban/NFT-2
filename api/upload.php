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
  
  if (isset($_POST['submit'])) 
  {
   //Import uploaded file to Database
   $handle = fopen($_FILES['filename']['tmp_name'], "r");
   while(($data = fgetcsv($handle)) !== FALSE){
   $sql = "INSERT into testtbl (user_name, first_name, last_name, date_added)
    values('".$data[0]."', '".$data[1]."', '".$data[2]."', '".$date."')";
   
    mysqli_query($conn, $sql) ;
  }
  }


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

<!-- <html>
 <head>
    
 </head>
 <body>
   <form action="import.php" method="post" enctype="multipart/form-data">
   <div>
    <label>Import CSV File:</label>
    <input type="file"  name="filename" id="filename">
    <button type="submit" id="submit" name="submit">Upload</button>
   </div>
  </form>
 <body>
</html> -->
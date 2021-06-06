<?php
$servername = "localhost:3305";
$database = "wpr";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "\nConnected successfully";


if ($result = $conn -> query("SELECT * FROM wpr")){
    echo "\nZwrócone wiersze z MySQL to: " . $result -> num_rows;

    $result -> free_result();
}

$sql = "SELECT secondName, firstName FROM wpr ORDER BY secondName";

if ($result1 = $conn -> query($sql)) {
  while ($row = $result1 -> fetch_row()) {
    printf ("%s (%s)\n", $row[0], $row[1]);
  }
  $result1 -> free_result();
}

$sql1 = "SELECT secondName, firstName FROM wpr ORDER BY secondName";
$result2 = $conn -> query($sql1);


$row = $result2 -> fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);


$row = $result2 -> fetch_array(MYSQLI_ASSOC);
printf ("%s (%s)\n", $row["secondName"], $row["firstName"]);


$result2 -> free_result();

$sql2="SELECT firstName,id FROM wpr ORDER BY firstName";

if ($result3=mysqli_query($conn, $sql2))
  {
  
  $rowcount=mysqli_num_rows($result3);
  printf("\n Result set has %d rows.\n",$rowcount);
  
  mysqli_free_result($result3);
  }


  $sql3 = "INSERT INTO persons (firstName, secondName) VALUES ('Peter', 'Parker')";
  if(mysqli_query($conn, $sql3)){
      echo "\n Rekordy dodano.";
  } else{
      echo "\n ERROR: Could not able to execute $sql3. " . mysqli_error($conn);
  }  

mysqli_close($conn);
?>
<?php
$servername = "localhost";
$username = "webprogmi211";
$password = "webprogmi211";
$dbname = "webprogmi211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, fullname, email, website FROM bsdaggao_MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["fullname"]. " -Email: " . $row["Email"]. " -Website" . $row["Website"]. " -Comment". $row["Comment"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
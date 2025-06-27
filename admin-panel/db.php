<?php
//$host = "localhost";
//$username = "root";          // ← default XAMPP username
//$password = "";              // ← empty password for XAMPP
//$dbname = "school";   // ← replace with your real DB name

//$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}
?>ewtet


<?php
$conn = new mysqli("localhost", "u315669183_soe2", "Sa5msa5m@", "u315669183_soe2");
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
?>
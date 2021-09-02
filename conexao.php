<?php
$servername = "156.67.72.201";
$database = "u190161205_offichour";
$username = "u190161205_offichour";
$password = "Am13041996@";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
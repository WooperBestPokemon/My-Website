<?php
//todo - Add some security here !

$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBFelixBestWaifu";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM tblAnime WHERE id = '$id'";
// check if there is no image and no genre 2

if ($conn->query($sql) === TRUE) {
    echo "Deleted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
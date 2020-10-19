<?php
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
echo '<label>Anime</label>';
echo '<select name="idAnime" id="idAnime" onchange="showAnime(this.value)">';
echo '<option value=\'0\'>-----</option>';

$sql = "SELECT id, title FROM tblAnime";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $title = $row["title"];
        echo "<option value='$id'>$title</option>";
    }
}
echo '</select><br>';

$conn->close();
?>
<?php
//todo - Add some security here !

$query = $_GET['query'];

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

$sql = "SELECT * FROM tblAnime WHERE id = '".$query."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $title = $row["title"];
        $titleJPN = $row["title_jpn"];
        $synopsis = $row["synopsis"];
        $genre1 = $row["genre_1"];
        $genre2 = $row["genre_2"];
        $review = $row["review"];
        $scoreVisual = $row["score_visual"];
        $scoreStory = $row["score_story"];
        $scoreCharacter = $row["score_character"];
        $scorePacing = $row["score_pacing"];
        $scoreMusic = $row["score_music"];
        $img = $row["image_path"];

        $data = [ 'title' => "$title", 'title_jpn' => "$titleJPN",'synopsis' => "$synopsis",'genre_1' => "$genre1",'genre_2' => "$genre2",'review' => "$review",'score_visual' => "$scoreVisual",'score_story' => "$scoreStory",'score_character' => "$scoreCharacter",'score_pacing' => "$scorePacing",'score_music' => "$scoreMusic", 'image' => "$img"];
    }
}
$conn->close();


header('Content-type: application/json');
echo json_encode( $data );
?>
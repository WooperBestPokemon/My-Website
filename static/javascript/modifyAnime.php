<?php
//todo - Add some security here !

$id = $_GET['id'];
$title = $_GET['title'];
$titleJPN = $_GET['titleJPN'];
$synopsys = $_GET['synopsys'];
$genre1 = $_GET['genre1'];
$genre2 = $_GET['genre2'];
$review = $_GET['review'];
$scoreVisual = $_GET['scoreVisual'];
$scoreStory = $_GET['scoreStory'];
$scoreCharacter = $_GET['scoreCharacter'];
$scorePacing = $_GET['scorePacing'];
$scoreMusic = $_GET['scoreMusic'];
$img = $_GET['$img'];


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

$sql = "";
if($img == "")
{
    $sql = "UPDATE tblAnime SET title = '$title', title_jpn = '$titleJPN', synopsis = '$synopsys', genre_1 = '$genre1', genre_2 = '$genre2', review = '$review', score_visual = '$scoreVisual', score_story = '$scoreStory', score_character = '$scoreCharacter', score_pacing = '$scorePacing', score_music = '$scoreMusic'
                WHERE id = '$id'";
}
else
{
    $sql = "UPDATE tblAnime SET title = '$title', title_jpn = '$titleJPN', synopsis = '$synopsys', genre_1 = '$genre1', genre_2 = '$genre2', review = '$review', score_visual = '$scoreVisual', score_story = '$scoreStory', score_character = '$scoreCharacter', score_pacing = '$scorePacing', score_music = '$scoreMusic', image_path = '$img'
                WHERE id = '$id'";
}
if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$result = $conn->query($sql);

?>
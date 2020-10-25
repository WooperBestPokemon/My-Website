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
// check if there is no image and no genre 2
if($genre2 == "" && $img == "")
{
    $sql = "INSERT INTO tblAnime (title, title_jpn, synopsis, genre_1, review, score_visual, score_story, score_character, score_pacing, score_music)
                VALUES ('$title', '$titleJPN', '$synopsys', '$genre1', '$review', '$scoreVisual', '$scoreStory', '$scoreCharacter', '$scorePacing', '$scoreMusic')";
}
elseif($genre2 == "")
{
    $sql = "INSERT INTO tblAnime (title, title_jpn, synopsis, genre_1, review, score_visual, score_story, score_character, score_pacing, score_music, image_path)
                VALUES ('$title', '$titleJPN', '$synopsys', '$genre1', '$review', '$scoreVisual', '$scoreStory', '$scoreCharacter', '$scorePacing', '$scoreMusic', '$img')";
}
elseif($img == "")
{
    $sql = "INSERT INTO tblAnime (title, title_jpn, synopsis, genre_1, genre_2, review, score_visual, score_story, score_character, score_pacing, score_music)
                VALUES ('$title', '$titleJPN', '$synopsys', '$genre1', '$genre2', '$review', '$scoreVisual', '$scoreStory', '$scoreCharacter', '$scorePacing', '$scoreMusic')";
}
else
{
    $sql = "INSERT INTO tblAnime (title, title_jpn, synopsis, genre_1, genre_2, review, score_visual, score_story, score_character, score_pacing, score_music, image_path)
                VALUES ('$title', '$titleJPN', '$synopsys', '$genre1', '$genre2', '$review', '$scoreVisual', '$scoreStory', '$scoreCharacter', '$scorePacing', '$scoreMusic', '$img')";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
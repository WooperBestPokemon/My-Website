<?php
    session_start();

    if($_SESSION["Connected"] != true)
    {
        if($_POST["txtPassword"] != "")
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "DBFelixBestWaifu";
            $pass = "";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT password FROM tblAdmin";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $pass = $row["password"];
                }
            }
            $conn->close();

            if(crypt($_POST["txtPassword"], $pass) == $pass)
            {
                $_SESSION["Connected"] = true;
            }
            else
            {
                echo "Bad Password";
            }

        }
    }
    else
    {
        //Modify Anime
        if($_POST["idAnime"] != "")
        {
            $id = $_POST["idAnime"];
            $title = $_POST["txtEnTitle"];
            $japaneseTitle = $_POST["txtJaTitle"];
            $synopsys = $_POST["textSynopsis"];
            $genre1 = $_POST["selGenre1"];
            $genre2 = $_POST["selGenre2"];
            $review = $_POST["textReview"];
            $scoreVisual = $_POST["numScoreVisual"];
            $scoreStory = $_POST["numScoreStory"];
            $scoreCharacter = $_POST["numScoreCharacter"];
            $scorePacing = $_POST["numScorePacing"];
            $scoreMusic = $_POST["numScoreMusic"];
            $image = $_POST["fileImage"];
            //Connecting to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "DBFelixBestWaifu";
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "";
            if($image == "")
            {
                $sql = "UPDATE tblAnime SET title = '$title', title_jpn = '$japaneseTitle', synopsis = '$synopsys', genre_1 = '$genre1', genre_2 = '$genre2', review = '$review', score_visual = '$scoreVisual', score_story = '$scoreStory', score_character = '$scoreCharacter', score_pacing = '$scorePacing', score_music = '$scoreMusic'
                WHERE id = '$id'";
            }
            else
            {
                $sql = "UPDATE tblAnime SET title = '$title', title_jpn = '$japaneseTitle', synopsis = '$synopsys', genre_1 = '$genre1', genre_2 = '$genre2', review = '$review', score_visual = '$scoreVisual', score_story = '$scoreStory', score_character = '$scoreCharacter', score_pacing = '$scorePacing', score_music = '$scoreMusic', image_path = '$image'
                WHERE id = '$id'";
            }
            if ($conn->query($sql) === TRUE) {
                echo "New record updated successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        //INSERT VALUE
        elseif($_POST["txtEnTitle"] != "")
        {
            //Getting the POST values
            $title = $_POST["txtEnTitle"];
            $japaneseTitle = $_POST["txtJaTitle"];
            $synopsys = $_POST["textSynopsis"];
            $genre1 = $_POST["selGenre1"];
            $genre2 = $_POST["selGenre2"];
            $review = $_POST["textReview"];
            $scoreVisual = $_POST["numScoreVisual"];
            $scoreStory = $_POST["numScoreStory"];
            $scoreCharacter = $_POST["numScoreCharacter"];
            $scorePacing = $_POST["numScorePacing"];
            $scoreMusic = $_POST["numScoreMusic"];
            $image = $_POST["fileImage"];
            //Connecting to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "DBFelixBestWaifu";
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "";
            // check if there is no image and no genre 2
            if($genre2 == "" && $image == "")
            {
                $sql = "INSERT INTO tblAnime (title, title_jpn, synopsis, genre_1, review, score_visual, score_story, score_character, score_pacing, score_music)
                VALUES ('$title', '$japaneseTitle', '$synopsys', '$genre1', '$review', '$scoreVisual', '$scoreStory', '$scoreCharacter', '$scorePacing', '$scoreMusic')";
            }
            elseif($genre2 == "")
            {
                $sql = "INSERT INTO tblAnime (title, title_jpn, synopsis, genre_1, review, score_visual, score_story, score_character, score_pacing, score_music, image_path)
                VALUES ('$title', '$japaneseTitle', '$synopsys', '$genre1', '$review', '$scoreVisual', '$scoreStory', '$scoreCharacter', '$scorePacing', '$scoreMusic', '$image')";
            }
            elseif($image == "")
            {
                $sql = "INSERT INTO tblAnime (title, title_jpn, synopsis, genre_1, genre_2, review, score_visual, score_story, score_character, score_pacing, score_music)
                VALUES ('$title', '$japaneseTitle', '$synopsys', '$genre1', '$genre2', '$review', '$scoreVisual', '$scoreStory', '$scoreCharacter', '$scorePacing', '$scoreMusic')";
            }
            else
            {
                $sql = "INSERT INTO tblAnime (title, title_jpn, synopsis, genre_1, genre_2, review, score_visual, score_story, score_character, score_pacing, score_music, image_path)
                VALUES ('$title', '$japaneseTitle', '$synopsys', '$genre1', '$genre2', '$review', '$scoreVisual', '$scoreStory', '$scoreCharacter', '$scorePacing', '$scoreMusic', '$image')";
            }

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
</head>
<body>
    <header>
        <?php include 'include/header.php'; ?>
    </header>
    <?php
        if($_SESSION["Connected"] != true)
        {
            echo '<div>';
                echo '<h2>Password</h2>';
                echo '<form method="post" action="admin.php">';
                    echo '<input type ="password" name="txtPassword"><br>';
                    echo '<input type="submit" value="Login">';
                echo '</form>';
            echo '</div>';
        }
        else
        {
            echo '<div class="sidenav">';
                echo '<button onclick="createAnimeHTML()">Create Anime Review</button>';
                echo '<button onclick="modifyAnimeHTML()" >Modify Anime Review</button>';
                echo '<button onclick="deleteAnimeHTML()">Delete Anime Review</button>';
                echo '<button onclick="viewStatsHTML()">View Stats</button>';
            echo '</div>';
        }
    ?>
    <div id="data">

    </div>

    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="static/javascript/script.js"></script>
<script src="static/javascript/form.js"></script>
</body>
</html>
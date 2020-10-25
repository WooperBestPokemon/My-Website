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
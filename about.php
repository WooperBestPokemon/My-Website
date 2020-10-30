<?php
    //todo - create a tblAbout so the data are not hard coded
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
</head>
<body>
<header>
    <?php include 'include/header.php'; ?>
</header>
<div class="newRow">
    <div class="col-md-6 lead text-center">
        <img class="align-middle" height='600px' width='300px' src='images/felix.png' alt='FelixArgyle'>
    </div>
    <div class="para lead">
        <div class="borderPara text-center">
            <h2>About me</h2>
        </div>
        <div class="paraText">
            <?php
                //todo - do a mysql request to get the aboutMe and echo it inside a <p>
            ?>
            <p>My name is Jacob and I'm a student at Cégep de Jonquière. I love playing video games and watching animes :D</p>
        </div>
        <div class="borderPara text-center">
            <h2>My Achievements and Experiences</h2>
        </div>
        <div class="paraText">
            <?php
                //todo - do a mysql request to get the achievements and echo it inside a <p>
            ?>
            <p>STAS : I was an IT and my main job was to install softwares on new Laptops/PCs. When I was waiting for the software to install, I created a Powershell ISE script that installs softwares automatically, and this script was saving hours of work!</p>
        </div>
        <div class="borderPara text-center">
            <h2>Language I have experience with</h2>
        </div>
        <div class="paraText">
            <?php
                //todo - do a mysql request to get the experiences and echo it inside a <p>
            ?>
            <p>C#/C++ - Html/CSS/Javascript/PHP - MySql/SqlServer - PowerShell ISE</p>
        </div>
    </div>
</div>
<footer>
    <?php include 'include/footer.php'; ?>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
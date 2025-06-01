<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div id="wrapper-div">
        <?php include "../components/header2.php"; ?>
       <main>
    <h1>Atlassian Williams Formula 1 Team</h1>
    <h3>On fifth place in the Constructors' Championship with 37 points</h3>
    <br/>
    <div class="williams-flex">
        <img src="../assets/img/Atlassian_Williams.jpg" class="Atlimg">
        <div class="text-group">
            <p class="text">
                Driven on by the brilliance and passion of the late Sir Frank Williams from Grove, United Kingdom, Williams grew from humble beginnings to become a Formula 1 behemoth and unrivalled by all with the exception of Ferrari and McLaren in terms of enduring success, Williams has been racking up Grand Prix wins and having a share of that championship glory and known for nurturing some of the greatest talents in the sport. With 128 pole positions and 133 fastest laps under their name. Williams is a strong competitive team in the grid.</p>

                <br/><br/>
            <p class="text">Current drivers that race for Williams are No. 23 Alex Albon and the smooth operator No. 55 Carlos sainz and are having a good decent start in the current season with both of them are keen to play strategies after having great results during the Miami Grand Prix.</p>
                <br /><br />
            <p class="text">Under the new team principal James Vowles. FW45 machine shows prodigious qualifying and straight-line speed, with best race result of seventh place for Alex Albon in Montreal and Monza during the 2023 season.</p>
        </div>
    </div>
    <br />

</main>
    </div>
            <?php include "../components/footer.php"; ?>
</body>
</html>
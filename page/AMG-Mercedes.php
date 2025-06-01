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
    <title>AMG Mercedes F1 Team</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../components/header2.css">
</head>
<body>
    <div id="wrapper-div">
        <?php include "../components/header2.php"; ?>
        <main>
            <h1>AMG Mercedes Formula 1 Team</h1>
            <h3>Running on second place in the Constructors' Championship with 141 points</h3>
            <br/>
            <div class="Mercedes-flex">
                <img src="../assets/img/AMG_Mercedes.jpg" class="AMGimg">
                <div class="text-group">
                    <p class="textD">
                        Mercedes-AMG PETRONAS Formula 1 Team is one of the most successful Formula 1 team. Known for winning Constructors' Championship and Drivers' Championship, winning 8 consecutive titles starting from 2014 to 2021 and 9 Drivers' Championship
                    </p>
                    <br/><br/>
                    <p class="textD">
                        Mercedes-AMG PETRONAS Formula 1 Team is based from Brackley, United Kingdom. Under the guidance of team principal Toto Wolff and technical chief James Allison, Mercedes is currently running second place in the Constructors' Championship and having a total of 11 Constructors' Championship with 9 consecutive titles from 2014 to 2024.
                    </p>
                    <br/><br/>
                    <p class="textD">Current drivers that race for Mercedes are No. 63 George Russell and rookie prodigy hailing from Italy No. 12 Andrea Kimi Antonelli. Both drivers are dominating almost everyone in the field, even catching up to the likes of McLaren and Red Bull.</p>
                </div>
            </div>
            <br/>
        </main>
    </div>
        <?php include "../components/footer.php"; ?>
</body>
</html>
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
</head>
<body>
    <div id="wrapper-div">
        <header id="header-container">
            <div id="logo-div">
                <img src="assets/img/FIA.png" alt="Logo" width="70">
            </div>
            <nav id="nav-div">
                <a href="../index.php">Home</a>
                <a href="https://www.formula1.com/en/teams" target="_blank">Teams</a>
                <a href="https://www.formula1.com/" target="_blank">F1.com</a>
                <a href="https://www.fia.com/" target="_blank">FIA.com</a>
            </nav>
        </header>
        <main>
            <h1>AMG Mercedes Formula 1 Team</h1>
            <h3>Running on second place in the Constructors' Championship with 141 points</h3>
            <br />
            <p>AMG Mercedes Formula 1 team is one of the most successful Formula 1 team. Known for winning Constructors' Championship and Drivers' Championship, winning 8 consecutive titles starting from 2014 to 2021 and 9 Drivers' Championship</p>
            <br />
            <p>The Oracle Red Bull Racing team is based from Milton Keynes, United Kingdom competing under an Austrian racing license. With its first entry in 2005 Austrian Grand Prix, Red Bull Racing is being lead by team principal Christian Horner, known for his leadership in making Red Bull managed to obtain six World Constructors' Championship titles between 2010 to 2023. Although their success, the scale of their success over the following decade was staggering. After a first podium in 2006, the team hit their stride in 2009, claiming six victories and second in the constructors' standings. Over the next four seasons they were a tour de force, claiming consecutive title doubles between 2010 and 2013, with Sebastian Vettel emerging as the sport's youngest quadruple champion.</p>
            <br/>
            <p></p>
        </main>
        <footer>
            <p>&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
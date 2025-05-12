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
        <header id="header-container">
            <div id="logo-div">
                <img src="../assets/img/FIA.png" alt="Logo" width="70">
            </div>
            <nav id="nav-div">
                <a href="../index.php">Home</a>
                <a href="https://www.formula1.com/en/teams" target="_blank">Teams</a>
                <a href="https://www.formula1.com/" target="_blank">F1.com</a>
                <a href="https://www.fia.com/" target="_blank">FIA.com</a>
            </nav>
        </header>
        <main>
            <h1>McLaren Formula 1 Team</h1>
            <h3>Current leading team for the World Constructor's Championship, with an astonishing 246 points.</h3>
            <br/>
            <div class="McL-flex">
                <img src="../assets/img/McLaren F1.jpg" class="McLimg">
                <div class="text-group">
                    <p class="text">
                        The Papaya team is based from Woking, United Kingdom. With its entering since 1966 under the guidance and restless endeavour of its founder Bruce Mclaren. With current team principal Andrea Stella with CEO Zak Brown. Current WCC champions after snatching it from Redbull and Mercedes. This papaya team is currently a monster in the grid thanks to their engineers covering up something good during their pre-test during Bahrain last year.
                    </p>
                    <br /><br />
                    <p class="text">
                        McLaren's current drivers are No. 81 Oscar Piastri and the one bearing the number 4 Lando Norris, these two drivers are forced to be reckoned with. With Oscar leading the grid with exceptional 131 points, and Lando taking the second position with 115 points.</p>
                        <br /><br />
                    <p class="text"> Under Andrea Stella and Zak Brown's leadership, this two papaya drivers are currently the fastest in terms of car development making Red Bull even launch an investigation due to their tyre wear cooling development. Making them loose less tyre wear while others suffer from more tyre use.</p>
                </div>
            </div>
            <br/>
        </main>
        <footer>
            <p>&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
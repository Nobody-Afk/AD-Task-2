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
    <title>F1 Hub</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="wrapper-div">
        <header id="header-container">
            <div id="logo-div">
                <img src="assets/img/FIA.png" alt="Logo" width="70">
            </div>
            <nav id="nav-div">
                <a href="https://www.formula1.com/en/teams" target="_blank">Teams</a>
                <a href="https://www.formula1.com/" target="_blank">F1.com</a>
                <a href="https://www.fia.com/" target="_blank">FIA.com</a>
            </nav>
        </header>
        <main>
            <h1>Welcome to the F1 World Constructors' Championship Hub</h1>
            <h3>This is all you need to know about the current season in Formula 1.</h3>
            <h3>Please select what team you want to check.</h3>

            <div id="Button_Teams">
                <a href="page/McLaren.php"><button type="button" id="McLaren">McLaren Formula 1 Team</button></a>
                <a href="page/AMG-Mercedes.php"><button type="button" id="Mercedes">AMG Mercedes Formula 1 Team</button></a>
                <a href="page/Oracle-Red-Bull-Racing.php"><button type="button" id="RedBull">Oracle Red Bull Racing</button></a>
                <a href="page/Scuderia-Ferrari-HP.php"><button type="button" id="Ferrari">Scuderia Ferrari HP</button></a>
                <a href="page/Atlassian-Williams.php"><button type="button" id="Williams">Atlassian Williams Racing</button></a>
            </div>
        </main>
        <footer>
            <p>&copy; <?php echo date('Y'); ?> F1 Hub. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
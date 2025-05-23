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
            <h1>Scuderia Ferrari HP</h1>
            <h3>Running Fourth place in the Constructors' Championship with 94 points</h3>
            <br />
            <p>The legendary team from Maranello, Italy. Scuderia Ferrari is the oldest and most successful team in Formula 1 history. Founded by Enzo Ferrari in 1929, the team has competed in every world championship since the series began in 1950.</p>
            <br />
            <p>With a record number of Constructors' and Drivers' Championships, Ferrari is synonymous with speed, passion, and the color red. Their current drivers are Charles Leclerc and Carlos Sainz, and the team continues to fight at the front of the grid.</p>
            <br />
            <p>Forza Ferrari!</p>
        </main>
        <footer>
            <p>&copy; <?php echo date('Y'); ?> F1 Hub. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
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
            <h1>Atlassian Williams Formula 1 Team</h1>
            <h3>On fifth place in the Constructors' Championship with 37 points</h3>
            <br />

            <p>Driven on by the brilliance and passion of the late Sir Frank Williams from Grove, United Kingdom, Williams grew from humble beginnings to become a Formula 1 behemoth and unrivalled by all with the exception of Ferrari and McLaren in terms of enduring success, Williams has been racking up Grand Prix wins and having a share of that championship glory and known for nurturing some of the greatest talents in the sport.</p>
            <br />

            <p></p>
            <br/>

            <p></p>
        </main>
        <footer>
            <p>&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
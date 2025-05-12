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
            <h1>Oracle Red Bull Racing</h1>
            <h3>Running on Third place in the Constructors' Championship with 105 points</h3>
            <br/>
            <div class="RedBull-flex">
                <img src="../assets/img/Oracle Redbull Racing.jpg" class="RBimg">
                <div class="text-group">
                    <p class="text">
                        The Oracle Red Bull Racing team is based from Milton Keynes, United Kingdom competing under an Austrian racing license. A powerhouse team mostly known for their driver's aggressive style and a championship contender and doing everything to give their drivers an edge on the grid. With its first entry in 2005 Austrian Grand Prix, Red Bull Racing is being lead by team principal Christian Horner, known for his leadership in making Red Bull managed to obtain six World Constructors' Championship titles between 2010 to 2023. Although their success, the scale of their success over the following decade was staggering. After a first podium in 2006, the team hit their stride in 2009, claiming six victories and second in the constructors' standings.
                    </p> <br/><br/>
                    <p class="text">
                        Red Bull's current drivers are the Four-Time World Champion, the Dutchman known for controversies after controversies due to his aggressive driving style and currently wearing the No. 1 Max Emilian Verstappen and a Japanese aggressive driver with an unfiltered mouth when it comes to talking to his engineers and wearing the No. 22 Yuki Tsunoda. Max Verstappen with 99 points and Yuki with 9 points.
                    </p>
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
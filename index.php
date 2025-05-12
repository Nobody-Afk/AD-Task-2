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
            <div class="header-row">
                <div id="logo-div">
                    <img src="assets/img/FIA.png" alt="Logo" width="70">
                </div>
                <div class="top-red-bar"></div>
                <nav id="nav-div">
                    <a href="https://www.formula1.com/en/teams" target="_blank">Teams</a>
                    <a href="https://www.formula1.com/" target="_blank">F1.com</a>
                    <a href="https://www.fia.com/" target="_blank">FIA.com</a>
                </nav>
            </div>
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

            <!-- Simple PHP Basics Demo: Related to F1 Teams -->
            <section style="margin:40px 0;">
                <h2>Current Team Points Standing</h2>
                <div style="background:#f0f0f0; border-radius:8px; padding:16px; max-width:400px;">
                <?php
                    // Declaration: F1 teams and their points
                    $teams = [
                        "McLaren Formula 1 Team" => 246,
                        "AMG Mercedes" => 180,
                        "Oracle Red Bull Racing" => 105,
                        "Scuderia Ferrari HP" => 94,
                        "Atlassian Williams" => 37
                    ];

                    // Loop and Conditional: Show if each team is above or below 100 points
                    foreach ($teams as $team => $points) {
                        if ($points >= 100) {
                            echo "$team: $points points (Top performer!)<br>";
                        } else {
                            echo "$team: $points points (Needs improvement)<br>";
                        }
                    }
                ?>
                </div>
            </section>
        </main>
        <footer>
            <p>&copy; <?php echo date('Y'); ?> F1 Hub. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
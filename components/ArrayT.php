<?php
function print_driver_standings($Drivers) {
    foreach ($Drivers as $name => $info) {
        if ($info["Points"] >= 100) {
            echo $name . " (" . $info["Team"] . "): " . $info["Points"] . " points (Top performer!)<br>";
        } else {
            echo $name . " (" . $info["Team"] . "): " . $info["Points"] . " points (Needs Improvement)<br>";
        }
    }
}
function print_team_standings($teams) {
    foreach ($teams as $team => $points) {
        if ($points >= 100) {
            echo "$team: $points points (Top Manufacturer)<br>";
        } else {
            echo "$team: $points points (Needs improvement)<br>";
        }
    }
}
$Drivers = array(
    "Oscar Piastri" => array("Team" => "McLaren Mercedes", "Points" => 146),
    "Lando Norris" => array("Team" => "McLaren Mercedes", "Points" => 133),
    "Max Verstappen" => array("Team" => "Oracle RedBull Racing", "Points" => 124),
    "George Russel" => array("Team" => "AMG Mercedes Petronas", "Points" => 99),
    "Charles Leclerc" => array("Team" => "Scuderia Ferrari HP", "Points" => 61),
);
$teams = [
    "McLaren Formula 1 Team" => 246,
    "AMG Mercedes" => 180,
    "Oracle Red Bull Racing" => 105,
    "Scuderia Ferrari HP" => 94,
    "Atlassian Williams" => 37
];
?>
<main>
    <div class="center-standings">
        <h1>Driver Standings</h1>
        <?php print_driver_standings($Drivers); ?>
        <br>
        <h3>Team Standings</h3>
        <?php print_team_standings($teams); ?>
    </div>
</main>
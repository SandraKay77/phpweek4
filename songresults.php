<?php
/**
 * Author: Sandra Schreffler
 * May 2022
 */

define('TITLE', '0');
define('ARTIST', '1');
define('GENRE', '2');
define('YEAR', '3');
define('COUNT', 'count');


//
//if(!isset($_GET(ARTIST))){
//    echo '<h1>error</h1>\n';
//    echo '<p>please include </p>';
//    exit;
//}
//
//if(!isset($_GET(GENRE))){
//    echo '<h1>error</h1>\n';
//    echo '<p>please include </p>';
//    exit;
//}

$title = $_GET['title'];
$artist = $_GET['artist'];
$genre = $_GET['genre'];
$year = $_GET['year'];
$count = $_GET[COUNT] + 1;



$songs = [];
$file = fopen('SpotifyTop100.csv', 'r');

for ($i = 0; $i < 1001; $i++){
    $line = fgetcsv($file);
    if(!$line){
        break;
    }
    $songs[] = $line;

}

fclose($file);





?>

<!DOCTYPE html>
<head>
    <title>
        Results
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="songresults">

<h1>Spotify Top Results</h1>
    <?php
    echo
        "<table>\n
    <tr>
        <th>" . $songs[0][TITLE] . "</th>";
    echo "<th>" . $songs[0][ARTIST] . "</th>";
    echo "<th>" . $songs[0][GENRE] . "</th>";
    echo "<th>" . $songs[0][YEAR] . "</th>\n
    </tr>";

    for($x = 1; $x < $count; $x++){
        echo "<tr>\n";
        echo "    <td>" . $songs[$x][TITLE] . "</td>";
        echo "    <td>" . $songs[$x][ARTIST] . "</td>";
        echo "    <td>" . $songs[$x][GENRE] . "</td>";
        echo "    <td>" . $songs[$x][YEAR] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>
</div>

<div>

</div>
</body>

<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Spotify Top Songs
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
<h1>
    Top Spotify Songs
</h1>
<h2>
    2010 - 2019
</h2>
</div>
<div id="searchform">
    <h4>Song Search Filter</h4>
    <h4>Search By:</h4>
<form action="songresults.php" method="get">
    <table>
            <tr>
        <td><label for="title">Title:</label></td>
        <td><input type="text" id="title" name="title"></td>
            </tr>
            <tr>
        <td><label for="artist">Song Artist:</label></td>
        <td><input type="text" id="artist" name="artist"></td>
            </tr>
            <tr>
        <td><label for="genre">Genre:</label></td>
        <td><input type="text" id="genre" name="genre"></td>
            </tr>
        <tr>
            <td><label for="year">Year:</label></td>
            <td>
                <input type="number" id="year" name="year" min="2010" max="2019">
            </td>
        </tr>
        <tr>
            <td>
                <label for="count">Number of Results:</label>
            </td>
            <td>
                <input type="number" id="count" name="count">
            </td>
        </tr>
            <tr>
                <td></td>
        <td><input type="submit" value="Search"></td>
            </tr>
    </table>
    <br>
</form>
</div>

</body>



</html>

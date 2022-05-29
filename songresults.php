<?php
/**
 * Author: Sandra Schreffler
 * May 2022
 */

define('TITLE', 'title');
define('ARTIST', 'artist');
define('GENRE', 'genre');
define('YEAR', 'year');
define('COUNT', 'count');



if(!isset($_GET(ARTIST))){
    echo '<h1>error</h1>\n';
    echo '<p>please include </p>';
    exit;
}

if(!isset($_GET(GENRE))){
    echo '<h1>error</h1>\n';
    echo '<p>please include </p>';
    exit;
}

$title = $_GET[TITLE];
$artist = $_GET[ARTIST];
$genre = $_GET[GENRE];
$year = $_GET[YEAR];
$length = $_GET[LENGTH];

$songs = [];
$file = fopen('week4/SpotifyTop100.csv', 'r');

if (!$file) {
    echo '<h1>Error!</h1>\n';
}
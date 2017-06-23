<?php

$result_list = array();
//add model for feed


//Feed voor de stand van de eredivisie
$sql = "SELECT * FROM eredivisie_stand ORDER BY id ASC";
$result = $mysqli->query($sql);

while ($item = $result-> fetch_assoc()) {
  $eredivisie_stand[] = $item;
}

//Feed voor de topscorers van de eredivisie
$sql = "SELECT * FROM eredivisie_top_scorers ORDER BY id ASC";
$result = $mysqli->query($sql);

while ($item = $result-> fetch_assoc()) {
  $eredivisie_top_scorers[] = $item;
}

//Feed voor de stand van de jupiler league
$sql = "SELECT * FROM jupiler_league_stand ORDER BY id ASC";
$result = $mysqli->query($sql);

while ($item = $result-> fetch_assoc()) {
  $jupiler_league_stand[] = $item;
}

//Feed voor de topscorers van de jupiler league
$sql = "SELECT * FROM jupiler_league_top_scorers ORDER BY id ASC";
$result = $mysqli->query($sql);

while ($item = $result-> fetch_assoc()) {
  $jupiler_league_top_scorers[] = $item;
}

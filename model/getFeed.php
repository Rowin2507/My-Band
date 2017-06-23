<?php

$result_list = array();
//add model for feed


//Feed voor het niewusbericht in de header
$sql = "SELECT * FROM feed ORDER BY id DESC LIMIT 0, 1";
$result = $mysqli->query($sql);

while ($item = $result-> fetch_assoc()) {
  $home_result_list[] = $item;
}

//Feed voor de nieuwsberichten op de home pagina
$sql = "SELECT * FROM feed ORDER BY id DESC LIMIT 1, 4";
$result = $mysqli->query($sql);

while ($item = $result-> fetch_assoc()) {
  $result_list[] = $item;
}

?>

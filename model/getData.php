<?php

$query = "SELECT * FROM feed ORDER BY id DESC LIMIT $limit_starting_number, $results_per_page";
$result = mysqli_query($mysqli,$query) or die ("Error querying getting data");

?>

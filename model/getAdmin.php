<?php

$dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die('Er is een fout opgetreden tijdens het verbinden met de Database!');
$query = "SELECT * FROM users";
$result = mysqli_query($dbc,$query) or die ('Error querying');

while($row = mysqli_fetch_array($result)) {
    $acc_id = $row['id'];
    $acc_username = $row['username'];
    $acc_mailadres = $row['mailadres'];
    $acc_status = $row['status'];
}
mysqli_close($dbc);

?>

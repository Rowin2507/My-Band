<?php
session_start();

if(isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}

include "../includes/config.php";

  $dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die('Er is een fout opgetreden tijdens het verbinden met de Database!');
  if (!$dbc)
  {
  die('Kon niet verbinden: ' . mysql_error());
  }

  mysqli_query($dbc,"DELETE FROM users WHERE username = '$username'") or die(mysql_error());

  session_destroy();
  echo "<script>window.open('../home','_self')</script>";
?>

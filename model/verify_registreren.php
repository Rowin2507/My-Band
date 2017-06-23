<h2><span style="letter-spacing: 3px;">REGISTRATIE VOLTOOID</span></h2>
  <p><img style="width: 200px;" src="account.png" /></p>

  <?php
    include "../includes/config.php";

    $dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die('Er is een fout opgetreden tijdens het verbinden met de Database!');

    $mailadres = $_GET["mailadres"];
    $hashcode = $_GET["hashcode"];

    $query = "SELECT * FROM users WHERE mailadres='$mailadres' AND hashcode='$hashcode'";
    $result = mysqli_query($dbc,$query) or die ("Fout! Query is mislukt");

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);
      $username = $row['username'];
      $query = "UPDATE users SET status=1 WHERE username='$username'";
      $result = mysqli_query($dbc,$query) or die ('Error updating.');
      echo '<br>Bedankt, je inschrijving is compleet!
      <p><a style="color: #d21f26;" href="inloggen.php">Klik hier om in te loggen.</a>';
    }else {
      echo'Er is een fout opgetreden tijdens het voltooien van je inschrijving.';
    }

  ?>

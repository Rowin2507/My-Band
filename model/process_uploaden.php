<?php
  session_start();

  include "../includes/config.php";

  if(isset($_POST['submit'])) {
      $dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die('Er is een fout opgetreden tijdens het verbinden met de Database!');

      $title = mysqli_real_escape_string($dbc,htmlentities($_POST['title']));
      $content = mysqli_real_escape_string($dbc,htmlentities($_POST['content']));
      $target = '../uploads/feed/' . time() . $_FILES['image']['name'];
      $temp = $_FILES['image']['tmp_name'];
      if (!empty($content)) {
          if (move_uploaded_file($temp, $target)) {
              echo '<div class="goed" id="melding-afbeelding"><i class="fa fa-check-square-o" aria-hidden="true"></i> Afbeelding geupload!</div>';
              $query = "INSERT INTO feed VALUES(0, '$title', '$target', NOW(), '$content')";
              $result = mysqli_query($dbc, $query) or die("Er iets fout gegaan!");
              echo "<script>window.open('../home','_self')</script>";
          } else {
            echo '<div class="fout" id="melding-afbeelding"><i class="fa fa-times" aria-hidden="true"></i> Bestand is te groot!</div>';
          }
      }
  }

?>

<?php
  session_start();

  include "../includes/config.php";

  $dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die('Er is een fout opgetreden tijdens het verbinden met de Database!');
  $username = mysqli_real_escape_string($dbc,trim($_POST['username']));

//https://www.google.com/recaptcha/admin#list
//https://codeforgeek.com/2014/12/google-recaptcha-tutorial/

  $text;$comment;$captcha;
  if(isset($_POST['text'])){
    $text=$_POST['text'];
  }if(isset($_POST['email'])){
    $text=$_POST['email'];
  }if(isset($_POST['password'])){
    $text=$_POST['password'];
  }if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
  }
  if(!$captcha){
    echo '<h2>Captcha aanvinken a.u.b.</h2>';
    exit;
  }
  $secretKey = "6LdWyiUUAAAAAI4rU5AseLPXtSww2ji0EFidJQ9e";
  $ip = $_SERVER['REMOTE_ADDR'];
  $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
  $responseKeys = json_decode($response,true);
  if(intval($responseKeys["success"]) !== 1) {
    echo '<h2>Jij bent een spammer!!</h2>';
  } else {
    $check=mysqli_query($dbc,"SELECT * FROM users WHERE username='$username'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      echo 'Een account met gebruikersnaam <strong>'. $username . '</strong> bestaat al.
            <p><a style="color: #d21f26;" href="../registreren">Klik hier om een ander account aan te maken</a>';
      exit();
   } else {

    $mailadres = mysqli_real_escape_string($dbc,trim($_POST['mailadres']));
    $password = mysqli_real_escape_string($dbc,trim($_POST['password']));
    $hashed_password = hash('sha512', $password);

    $_SESSION['mailadres'] = $_POST['mailadres'];
    $_SESSION['password'] = $_POST['password'];

    $random_number = rand(1000, 9999);
    $hashcode = hash('sha512', $random_number);

    $query = "INSERT INTO users
              VALUES (0,'$username','$hashed_password','$mailadres','$hashcode',0)";
    $result = mysqli_query($dbc,$query) or die ('Error inserting user.');


    $to = $_POST ['mailadres'];
    $subject = 'AJAX-FANS account activatie';
    $msg = '
      <html>
      <head>
        <title>AJAX-Fans account activatie</title>
        <style>
          body {margin: 0 auto; font-family: sans-serif; background: #E6E6E6; color: #000; text-align: center;}
          table.logo {margin: 50px auto; text-align: center;}
          table.content {margin: 0 auto; text-align: center;}
          a {color: #d21f26; text-decoration: none;}
        </style>
      </head>

      <body style="margin: 0 auto; font-family: sans-serif; background: #E6E6E6; color: #000; text-align: center;">
        <table class="logo" cellspacing="0" style="background: #fff; width: 600px; padding: 25px; border-radius: 8px;">
          <tr><a href="http://ajax-fans.pe.hu/"><img style="width: 300px; height: 800px;" src="http://ajax-fans.pe.hu/images/ajax-fans-logo-bg.png" /></a></td>
          </tr>
        </table>

        <table class="content" cellspacing="0" style="background: #fff; width: 600px; height: 750px; padding: 25px; border-radius: 8px;">
          <tr>
            <p><p><p><p><span style="font-size: 20px;">Welkom bij AJAX-FANS <strong><span style="color: #d21f26;">'. $username .'</span></strong></span>
            <p>Om je account te activeren moet je op de onderstaande link klikken</p>
            <a href="http://ajax-fans.pe.hu/model/verify_registreren.php?mailadres=' . $mailadres . '&hashcode=' . $hashcode . '">Klik hier om je e-mail te bevestigen</a>
          </tr>
          <tr>
            <p>Copyright © 2017 - AJAX-FANS | Rowin Schmidt | MD1A
          </tr>
        </table>

      </body>
      </html>
      ';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: activatie@ajax-fans.nl' . "\r\n";
    $headers .= '' . "\r\n";

    if (mail($to, $subject, $msg, $headers))
    {
      echo ('<p>Er is een bevestiginsmail verzonden.</p>');
    }
    else {
      echo ('<p>Er is een fout opgetreden tijdens het verzenden van de mail. <a href="registreren.php">Probeer het hier opnieuw.</a>');
    }


  };

  }

?>

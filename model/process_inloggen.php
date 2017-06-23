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
    if (mysqli_connect_errno())
    {
    echo 'MySQLi Connection was not established: ' . mysqli_connect_error();
    }

    if(isset($_POST['submit'])){
      $_SESSION['username'] = $_POST['username'];

      $username = mysqli_real_escape_string($dbc,$_POST['username']);
      $password = mysqli_real_escape_string($dbc,$_POST['password']);
      $hashed_password = hash('sha512', $password);

      $sel_user = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password'" or die('Er is een fout opgetreden tijdens het communiceren met de Database!');

      $run_user = mysqli_query($dbc, $sel_user);
      $check_user = mysqli_num_rows($run_user);

      if($check_user>0){
        $_SESSION['username']=$username;
        echo "<script>window.open('../home','_self')</script>";
      } else {
        echo "<script>alert('Gebruikersnaam of wachtwoord is incorrect, probeer het opnieuw!')
              window.open('../inloggen','_self')</script>";
        session_destroy();
      }
    }

  }

?>

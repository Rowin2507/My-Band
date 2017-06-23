
<div class="bg-image" style="background-image:url('/images/registreren-blur-bg.jpg');"></div>

<div class="login-registreren-wrap">
  <img src="./images/account-logo.png" alt="account">
  <form method="post" action="model/process_registreren.php">
      <p><span class="item"><i class="fa fa-user-o" aria-hidden="true"></i></span><input type="text" name="username" placeholder="Gebruikersnaam" required/></p>
      <p><span class="item"><i class="fa fa-envelope-o" aria-hidden="true"></i></span><input type="email" name="mailadres" placeholder="Mailadres" required/></p>
      <p><span class="item"><i class="fa fa-key" aria-hidden="true"></i></span><input type="password" name="password" id="password" placeholder="Wachtwoord" minlength=5 required/><span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span></p>
      <div class="g-recaptcha" data-sitekey="6LdWyiUUAAAAANXBdeY8hAPfmY7bZiEfxmKcAUCx"></div>
      <p><input type="submit" name="submit" id="registreren" value="&#xf2c0; Registreren"/></p>
      <p><span style="line-height: 30px;">Heb je al een account? <a href="./inloggen">Log hier in.</a></span>
  </form>
</div>

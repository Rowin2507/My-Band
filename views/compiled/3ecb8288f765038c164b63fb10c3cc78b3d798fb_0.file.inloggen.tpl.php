<?php
/* Smarty version 3.1.30, created on 2017-06-19 08:24:09
  from "C:\Users\rowin\Google Drive\SCHOOL\Media College\AJAX-FANS site\views\inloggen.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59478a29285cb5_40665396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ecb8288f765038c164b63fb10c3cc78b3d798fb' => 
    array (
      0 => 'C:\\Users\\rowin\\Google Drive\\SCHOOL\\Media College\\AJAX-FANS site\\views\\inloggen.tpl',
      1 => 1497647690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59478a29285cb5_40665396 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="bg-image" style="background-image:url('/images/inloggen-blur-bg.jpg');"></div>

<div class="login-registreren-wrap">
  <img src="./images/account-logo.png" alt="account">
  <form method="post" action="model/process_inloggen.php">
      <p><span class="item"><i class="fa fa-user-o" aria-hidden="true"></i></span><input type="text" name="username" placeholder="Gebruikersnaam" required/></p>
      <p><span class="item"><i class="fa fa-key" aria-hidden="true"></i></span><input type="password" name="password" id="password" placeholder="Wachtwoord" minlength=5 required/><span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span></p>
      <div class="g-recaptcha" data-sitekey="6LdWyiUUAAAAANXBdeY8hAPfmY7bZiEfxmKcAUCx"></div>
      <p><input type="submit" name="submit" id="inloggen" value="&#xf090; Inloggen"/></p>
      <p><span style="line-height: 30px;">Nog geen account? <a href="./registreren">Registreer hier.</a></span></p>
  </form>
</div>
<?php }
}

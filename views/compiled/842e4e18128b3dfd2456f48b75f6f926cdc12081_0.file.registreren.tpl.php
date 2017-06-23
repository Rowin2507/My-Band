<?php
/* Smarty version 3.1.30, created on 2017-06-19 17:06:44
  from "C:\Users\rowin\Google Drive\SCHOOL\Media College\AJAX-FANS site\views\registreren.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594804a40d5973_94953746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '842e4e18128b3dfd2456f48b75f6f926cdc12081' => 
    array (
      0 => 'C:\\Users\\rowin\\Google Drive\\SCHOOL\\Media College\\AJAX-FANS site\\views\\registreren.tpl',
      1 => 1497647702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594804a40d5973_94953746 (Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php }
}

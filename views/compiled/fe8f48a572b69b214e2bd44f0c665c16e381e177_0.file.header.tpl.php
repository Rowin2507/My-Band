<?php
/* Smarty version 3.1.30, created on 2017-06-21 18:30:00
  from "C:\Users\Rowin2507\Google Drive\SCHOOL\Media College\AJAX-FANS site\views\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594abb2864de33_08741628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe8f48a572b69b214e2bd44f0c665c16e381e177' => 
    array (
      0 => 'C:\\Users\\Rowin2507\\Google Drive\\SCHOOL\\Media College\\AJAX-FANS site\\views\\header.tpl',
      1 => 1497644035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594abb2864de33_08741628 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
  <div class="header_wrap">
    <div id="logo"><a href="./home"><img src="./images/ajax-fans-logo-bg.png" alt="logo" /></a></div>
      <nav>
        <h1>Menu</h1>
          <a href="./home"><i class="fa fa-home" aria-hidden="true"></i> HOME</a>
          <a href="./nieuws"><i class="fa fa-newspaper-o" aria-hidden="true"></i></i> NIEUWS</a>
          <a href="./competities"><i class="fa fa-futbol-o" aria-hidden="true"></i> COMPETITIES</a>
          <a href="./contact"><i class="fa fa-info-circle" aria-hidden="true"></i> CONTACT</a>
          <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
            <a href="./account" class="uploaden"><i class="fa fa-user-o" aria-hidden="true"></i> ACCOUNT <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
          <?php } else { ?>
            <a href="./inloggen" class="uploaden"><i class="fa fa-user-o" aria-hidden="true"></i> INLOGGEN</a>
          <?php }?>


      </nav>
      <div id="header_menu"><i class="fa fa-bars" aria-hidden="true"></i></div>
  </div>
</header>
<body>
<?php }
}

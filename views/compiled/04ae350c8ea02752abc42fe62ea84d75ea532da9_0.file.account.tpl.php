<?php
/* Smarty version 3.1.30, created on 2017-06-19 13:00:10
  from "C:\Users\rowin\Google Drive\SCHOOL\Media College\AJAX-FANS site\views\account.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947cada8ce579_67150175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04ae350c8ea02752abc42fe62ea84d75ea532da9' => 
    array (
      0 => 'C:\\Users\\rowin\\Google Drive\\SCHOOL\\Media College\\AJAX-FANS site\\views\\account.tpl',
      1 => 1497877190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5947cada8ce579_67150175 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="sub-header" style="background-image:url('/images/account-header.jpg');"></div>

<div class="con-wrapper" style="padding-bottom: 150px; text-align: center;">
  <h3>ACCOUNT | <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
  <a href="model/process_uitloggen.php"><button class="tenue-thuis"><i class="fa fa-sign-out" aria-hidden="true"></i> UITLOGGEN</button></a>
  <a href="model/process_delete.php"><button class="tenue-uit" style="background-color: black;"><i class="fa fa-trash-o" aria-hidden="true"></i> ACCOUNT VERWIJDEREN</button></a>

  <h3>NIEUWSBERICHT POSTEN</h3>
  <p><img src="../images/uploadImage.png" id="preview" alt="PreviewImage" />
    <form enctype="multipart/form-data" method="post" action="model/process_uploaden.php" id="upload-form">
      <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
      <label class="upload"><input type="file" name="image" onchange="readURL(this);" />
      <span class="upload-button-select" style="color: white;"><i class="fa fa-picture-o" aria-hidden="true"></i> AFBEELDING SELECTEREN</span>
      </label><p>
      <p><span class="item" style="margin-top: 32px;"><i class="fa fa-futbol-o" aria-hidden="true"></i></span><input type="text" name="title" style="margin-top: 30px;" placeholder="Titel" required/></p>
      <p><span class="item" style="margin-top: 7px;"><i class="fa fa-comment-o" aria-hidden="true"></i></span><textarea name="content" placeholder="Beschrijving" required></textarea></p>
      <p><input type="submit" name="submit" class="uploaden" value="&#xf093; BERICHT POSTEN" />
    </form>
</div>
<?php }
}

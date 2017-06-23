<?php
/* Smarty version 3.1.30, created on 2017-06-20 08:22:03
  from "C:\Users\rowin\Google Drive\SCHOOL\Media College\AJAX-FANS site\views\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5948db2b0bf3f8_06164316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd336e93c41bd260f61bd53fbbdc2fc3758f730b' => 
    array (
      0 => 'C:\\Users\\rowin\\Google Drive\\SCHOOL\\Media College\\AJAX-FANS site\\views\\admin.tpl',
      1 => 1497946918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5948db2b0bf3f8_06164316 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="sub-header" style="background-image:url('/images/admin-header.jpg');"></div>

<div class="con-wrapper" style="padding-bottom: 150px; text-align: center;">
  <h3>AJAX-FANS | </h3>
  <a href="model/process_uitloggen.php"><button class="tenue-thuis"><i class="fa fa-sign-out" aria-hidden="true"></i> UITLOGGEN</button></a>
  <a href="model/process_delete.php"><button class="tenue-uit" style="background-color: black;"><i class="fa fa-trash-o" aria-hidden="true"></i> ACCOUNT VERWIJDEREN</button></a>

  <h3>GEBRUIKERS BEHEREN</h3>
  <div class="tabel-content">
    <table>
      <tr>
        <th>ID</th>
        <th>GEBRUIKERSNAAM</th>
        <th>MAILADRES</th>
        <th>STATUS</th>
        <th></th>
      </tr>

      <tr>
        <form method="post" action="process_edit_1.php" />
          <td><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['acc_id']->value;?>
" /></td>
          <td><input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['acc_username']->value;?>
" /></td>
          <td><input type="hidden" name="mailadres" value="<?php echo $_smarty_tpl->tpl_vars['acc_mailadres']->value;?>
" /></td>
          <td><input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['acc_status']->value;?>
" /></td>
          <td><input type="submit" name="submit" value="VERWIJDEREN" /></td>
        </form>
      </tr>
    </table>
  </div>


  <table>
    <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['acc_id']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['acc_username']->value;?>
</td>

    </tr>
  </table>

</div>
<?php }
}

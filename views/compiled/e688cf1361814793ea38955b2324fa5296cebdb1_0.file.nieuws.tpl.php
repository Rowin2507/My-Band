<?php
/* Smarty version 3.1.30, created on 2017-06-09 17:45:23
  from "C:\Users\Rowin2507\Google Drive\SCHOOL\Media College\AJAX-FANS site\views\nieuws.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593adeb39eb4f4_59215772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e688cf1361814793ea38955b2324fa5296cebdb1' => 
    array (
      0 => 'C:\\Users\\Rowin2507\\Google Drive\\SCHOOL\\Media College\\AJAX-FANS site\\views\\nieuws.tpl',
      1 => 1497030311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593adeb39eb4f4_59215772 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="header-bg-gradient"></div>

<div class="nieuws-wrap" onclick="https://www.google.nl/">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feed_list']->value, 'feed');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feed']->value) {
?>
    <a href="https://www.google.nl/"><div class="nieuws-posts">
      <div class="post-image" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['feed']->value['img'];?>
');"></div>
      <span class="datum"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['feed']->value['datum'];?>
</span>
      <div class="content">
        <h1><?php echo $_smarty_tpl->tpl_vars['feed']->value['title'];?>
</h1>
        Lees het volledige bericht <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
      </div>
    </div></a>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



  <div class="navigation">
    <table>
      <tr>
        <td id="nav-left"><a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></td>
        <td><a href="#">1</a></td>
        <td><a href="#">2</a></td>
        <td><a href="#">3</a></td>
        <td><a href="#">4</a></td>
        <td><a href="#">5</a></td>
        <td><a href="#">6</a></td>
        <td><a href="#">7</a></td>
        <td><a href="#">8</a></td>
        <td><a href="#">9</a></td>
        <td id="nav-right"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></td>
      </tr>
    </table>
  </div>

</div>
<?php }
}

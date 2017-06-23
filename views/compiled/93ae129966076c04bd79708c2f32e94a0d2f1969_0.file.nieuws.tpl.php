<?php
/* Smarty version 3.1.30, created on 2017-06-15 15:14:11
  from "C:\Users\rowin\Google Drive\SCHOOL\Media College\AJAX-FANS site\views\nieuws.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5942a443cceae8_38477064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93ae129966076c04bd79708c2f32e94a0d2f1969' => 
    array (
      0 => 'C:\\Users\\rowin\\Google Drive\\SCHOOL\\Media College\\AJAX-FANS site\\views\\nieuws.tpl',
      1 => 1497539644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5942a443cceae8_38477064 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="header-bg-gradient"></div>

<div class="nieuws-wrap" onclick="https://www.google.nl/">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'feed');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feed']->value) {
?>
    <a href="#artikel<?php echo $_smarty_tpl->tpl_vars['feed']->value['id'];?>
"><div class="nieuws-posts">
      <div class="post-image" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['feed']->value['img'];?>
');"></div>
      <span class="datum"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['feed']->value['datum'];?>
</span>
      <div class="content">
        <h1><?php echo $_smarty_tpl->tpl_vars['feed']->value['title'];?>
</h1>
        Lees het volledige artikel <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
      </div>
    </div></a>

    <div class="lightbox short-animate" id="artikel<?php echo $_smarty_tpl->tpl_vars['feed']->value['id'];?>
">
      <div class="lightbox-content">
        <div class="lightbox-image" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['feed']->value['img'];?>
');"></div>
        <div class="lightbox-content-text">
          <span style="display: inline-block; margin-top: 25px"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['feed']->value['datum'];?>
</span>
          <p><h1><?php echo $_smarty_tpl->tpl_vars['feed']->value['title'];?>
</h1></p>
          <p><?php echo $_smarty_tpl->tpl_vars['feed']->value['content'];?>
</p>
        </div>
      </div>
    </div>
    <div id="lightbox-controls" class="short-animate">
      <a id="close-lightbox" class="long-animate" href="#!"></a>
    </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


  <div class="paginas-wrap">
    <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
      <span id="paginas-links">
        <a href="index.php?page=nieuws&pagina=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><i class="fa fa-angle-left" aria-hidden="true"></i> Vorige</a>
      </span>
    <?php }?>
    <p id="pagenumber">Pagina <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
      <span id="paginas-rechts">
        <a href="index.php?page=nieuws&pagina=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Volgende <i class="fa fa-angle-right" aria-hidden="true"></i></a>
      </span>
    <?php }?>
  </div>
</div>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-06-14 10:03:51
  from "C:\Users\rowin\Google Drive\SCHOOL\Media College\AJAX-FANS site\views\competities.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59410a0789a4a0_42725637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8730a8f723eb2fb0cadd338c207760683477a507' => 
    array (
      0 => 'C:\\Users\\rowin\\Google Drive\\SCHOOL\\Media College\\AJAX-FANS site\\views\\competities.tpl',
      1 => 1497434628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59410a0789a4a0_42725637 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="sub-header" style="background-image:url('/images/competities-header.jpg');"></div>

<div class="sub-wrapper">
  <h1 style="margin-top:25px;"><i class="fa fa-futbol-o" aria-hidden="true"></i> EREDIVISIE</h1>
  <div class="gray-wrapper">
    <div class="tabellen">
      <div class="tabel">
        <h2>STAND</h2>
        <div class="tabel-content">
          <table>
            <tr>
              <th></th>
              <th>TEAM</th>
              <th>G</th>
              <th>P</th>
              <th>D</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['eredivisie_stand']->value, 'club');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['club']->value) {
?>
            <tr>
              <td id="id"><?php echo $_smarty_tpl->tpl_vars['club']->value['id'];?>
</td>
              <td id="club"><?php echo $_smarty_tpl->tpl_vars['club']->value['team'];?>
</td>
              <td id="punten"><?php echo $_smarty_tpl->tpl_vars['club']->value['gespeeld'];?>
</td>
              <td id="gespeeld"><?php echo $_smarty_tpl->tpl_vars['club']->value['punten'];?>
</td>
              <td id="doelpunten"><?php echo $_smarty_tpl->tpl_vars['club']->value['doelpunten'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </table>
        </div>
        <span style="margin-top:25px; display:block;">Seizoen 2016 - 2017</span>
      </div>

      <div class="tabel">
        <h2>TOPSCORERS</h2>
        <div class="tabel-content">
          <table>
            <tr>
              <th></th>
              <th>SPELER</th>
              <th></th>
              <th>CLUB</th>
              <th>D</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['eredivisie_top_scorers']->value, 'speler');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['speler']->value) {
?>
            <tr>
              <td id="id"><?php echo $_smarty_tpl->tpl_vars['speler']->value['id'];?>
</td>
              <td id="club"><?php echo $_smarty_tpl->tpl_vars['speler']->value['speler'];?>
</td>
              <td></td>
              <td id="punten"><?php echo $_smarty_tpl->tpl_vars['speler']->value['club'];?>
</td>
              <td id="doelpunten"><?php echo $_smarty_tpl->tpl_vars['speler']->value['doelpunten'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </table>
        </div>
        <span style="margin-top:25px; display:block;">Seizoen 2016 - 2017</span>
      </div>
    </div>
  </div>

    <h1 style="margin-top:25px;"><i class="fa fa-futbol-o" aria-hidden="true"></i> JUPILER LEAGUE</h1>
    <div class="gray-wrapper" style="margin-bottom:150px;">
      <div class="tabellen">
        <div class="tabel">
          <h2>STAND</h2>
          <div class="tabel-content">
            <table>
              <tr>
                <th></th>
                <th>TEAM</th>
                <th>G</th>
                <th>P</th>
                <th>D</th>
              </tr>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jupiler_league_stand']->value, 'club');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['club']->value) {
?>
              <tr>
                <td id="id"><?php echo $_smarty_tpl->tpl_vars['club']->value['id'];?>
</td>
                <td id="club"><?php echo $_smarty_tpl->tpl_vars['club']->value['team'];?>
</td>
                <td id="punten"><?php echo $_smarty_tpl->tpl_vars['club']->value['gespeeld'];?>
</td>
                <td id="gespeeld"><?php echo $_smarty_tpl->tpl_vars['club']->value['punten'];?>
</td>
                <td id="doelpunten"><?php echo $_smarty_tpl->tpl_vars['club']->value['doelpunten'];?>
</td>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>
          </div>
          <span style="margin-top:25px; display:block;">Seizoen 2016 - 2017</span>
        </div>

        <div class="tabel">
          <h2>TOPSCORERS</h2>
          <div class="tabel-content">
            <table>
              <tr>
                <th></th>
                <th>SPELER</th>
                <th></th>
                <th>CLUB</th>
                <th>D</th>
              </tr>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jupiler_league_top_scorers']->value, 'speler');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['speler']->value) {
?>
              <tr>
                <td id="id"><?php echo $_smarty_tpl->tpl_vars['speler']->value['id'];?>
</td>
                <td id="club"><?php echo $_smarty_tpl->tpl_vars['speler']->value['speler'];?>
</td>
                <td></td>
                <td id="punten"><?php echo $_smarty_tpl->tpl_vars['speler']->value['club'];?>
</td>
                <td id="doelpunten"><?php echo $_smarty_tpl->tpl_vars['speler']->value['doelpunten'];?>
</td>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>
          </div>
          <span style="margin-top:25px; display:block;">Seizoen 2016 - 2017</span>
        </div>
      </div>
  </div>







</div>
<?php }
}

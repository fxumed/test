<?php
/* Smarty version 3.1.33, created on 2019-02-14 14:03:22
  from 'C:\wamp64\www\red.ru\test\templates\tarifs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c65752aa67070_53917746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd28c99dad11dac31d07f660d0f7d3598184533f' => 
    array (
      0 => 'C:\\wamp64\\www\\red.ru\\test\\templates\\tarifs.tpl',
      1 => 1550152897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c65752aa67070_53917746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17149682935c65752aa475f8_44295956';
?>
<div class="container" id="tarifs">
  <div class="row">


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tarifs']->value, 'tarif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarif']->value) {
?>
      <div class="col-lg-4 col-sm-6 col-12" id="tarif_id_<?php echo $_smarty_tpl->tpl_vars['tarif']->value->id;?>
">
        <div class="tarif">
          <div class="title">Тариф "<?php echo $_smarty_tpl->tpl_vars['tarif']->value->title;?>
"</div>
          <div class="param">
            <div class="speed">
              <?php echo $_smarty_tpl->tpl_vars['tarif']->value->speed;?>

            </div>
            <div class="prise">
              <?php echo $_smarty_tpl->tpl_vars['tarif']->value->min_prise;?>
 - <?php echo $_smarty_tpl->tpl_vars['tarif']->value->max_prise;?>
 ₽/мес
            </div>
          </div>
          <div class="link">
            <a href="<?php echo $_smarty_tpl->tpl_vars['tarif']->value->link;?>
" target="_blank">узнать подробнее на сайте www.sknt.ru</a>
          </div>
        </div>
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  </div>
</div><?php }
}

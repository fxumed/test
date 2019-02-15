<?php
/* Smarty version 3.1.33, created on 2019-02-15 07:45:31
  from 'C:\wamp64\www\red.ru\templates\tarifs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c666e1bd113b9_75592373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '706f83ac646230f978920bb86637532512c8da5f' => 
    array (
      0 => 'C:\\wamp64\\www\\red.ru\\templates\\tarifs.tpl',
      1 => 1550216700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c666e1bd113b9_75592373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '208479695c666e1bcc1760_86943447';
?>
<div class="container-fluid" id="tarifs">
  <div class="row">


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tarifs']->value, 'tarif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarif']->value) {
?>
      <div class="col-lg-4 col-sm-6 col-12" id="tarif_<?php echo $_smarty_tpl->tpl_vars['tarif']->value->id;?>
">
        <div class="tarif">
          <div class="title">Тариф "<?php echo $_smarty_tpl->tpl_vars['tarif']->value->title;?>
"</div>
          <div class="param" data-id="<?php echo $_smarty_tpl->tpl_vars['tarif']->value->id;?>
">
            <div class="speed">
              <?php echo $_smarty_tpl->tpl_vars['tarif']->value->speed;?>
 Мбит/с
            </div>
            <div class="prise" id="<?php echo $_smarty_tpl->tpl_vars['tarif']->value->id;?>
">
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

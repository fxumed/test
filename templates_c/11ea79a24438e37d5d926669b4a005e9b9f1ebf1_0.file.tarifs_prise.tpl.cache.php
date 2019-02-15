<?php
/* Smarty version 3.1.33, created on 2019-02-15 10:07:07
  from 'C:\wamp64\www\red.ru\templates\tarifs_prise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c668f4b6ee0f0_17855797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ea79a24438e37d5d926669b4a005e9b9f1ebf1' => 
    array (
      0 => 'C:\\wamp64\\www\\red.ru\\templates\\tarifs_prise.tpl',
      1 => 1550225215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c668f4b6ee0f0_17855797 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9722416435c668f4b695442_85613065';
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tarifs']->value, 'tarif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarif']->value) {
?>

	<div class="container-fluid tarif_prise" id="prise_<?php echo $_smarty_tpl->tpl_vars['tarif']->value->id;?>
">
		<div class="row">
			<div class="col-12 prise_title">
					<div class="back back_main" data-id="<?php echo $_smarty_tpl->tpl_vars['tarif']->value->id;?>
" ></div>
				Тариф "<?php echo $_smarty_tpl->tpl_vars['tarif']->value->title;?>
"
			</div>
		</div>
		<div class="row">

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tarif']->value->tarifs_sort, 'prises');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prises']->value) {
?>
			<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							<?php echo $_smarty_tpl->tpl_vars['prises']->value->pay_period;?>
 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="<?php echo $_smarty_tpl->tpl_vars['prises']->value->ID;?>
" data-id_tarif="<?php echo $_smarty_tpl->tpl_vars['tarif']->value->id;?>
">
						<div class="prise_prise">
							<?php echo $_smarty_tpl->tpl_vars['prises']->value->price_mes;?>
 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — <?php echo $_smarty_tpl->tpl_vars['prises']->value->price;?>
 ₽</p>
							<?php if (($_smarty_tpl->tpl_vars['tarif']->value->max_prise-$_smarty_tpl->tpl_vars['prises']->value->price_mes) > 0) {?>
							<p>скидка — <?php echo $_smarty_tpl->tpl_vars['tarif']->value->max_prise-$_smarty_tpl->tpl_vars['prises']->value->price_mes;?>
 ₽</p>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		</div>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

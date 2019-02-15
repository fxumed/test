<?php
/* Smarty version 3.1.33, created on 2019-02-15 10:07:07
  from 'C:\wamp64\www\red.ru\templates\end.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c668f4b7bc894_86052305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f738d8aadcbc9f00676b6aed1215830c589ff4cf' => 
    array (
      0 => 'C:\\wamp64\\www\\red.ru\\templates\\end.tpl',
      1 => 1550225224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c668f4b7bc894_86052305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9391697745c668f4b79ac55_34214088';
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tarifs']->value, 'tarif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarif']->value) {
?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tarif']->value->tarifs_sort, 'prises');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prises']->value) {
?>
		
	<div class="container-fluid end" id="prise_end_<?php echo $_smarty_tpl->tpl_vars['prises']->value->ID;?>
">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="<?php echo $_smarty_tpl->tpl_vars['tarif']->value->id;?>
" data-id_prise="<?php echo $_smarty_tpl->tpl_vars['prises']->value->ID;?>
" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "<?php echo $_smarty_tpl->tpl_vars['tarif']->value->title;?>
"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты <?php echo $_smarty_tpl->tpl_vars['prises']->value->pay_mesyacev;?>

						</div>
						<div class="prise_more">
							<p>разовый платеж — <?php echo $_smarty_tpl->tpl_vars['prises']->value->price;?>
 ₽</p>
							<p>со счета спишется — <?php echo $_smarty_tpl->tpl_vars['prises']->value->price;?>
 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - <?php echo $_smarty_tpl->tpl_vars['prises']->value->time;?>
</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

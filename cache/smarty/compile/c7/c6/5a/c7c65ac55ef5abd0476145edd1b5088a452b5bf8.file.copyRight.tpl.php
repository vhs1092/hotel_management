<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 00:22:57
         compiled from "C:\xampp\htdocs\hotelcommerce\modules\hotelreservationsystem\views\templates\hook\copyRight.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82245ae2a5a14f3239-99708434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7c65ac55ef5abd0476145edd1b5088a452b5bf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcommerce\\modules\\hotelreservationsystem\\views\\templates\\hook\\copyRight.tpl',
      1 => 1503553336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82245ae2a5a14f3239-99708434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_ESTABLISHMENT_YEAR' => 0,
    'base_dir' => 0,
    'WK_HTL_CHAIN_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae2a5a14fac57_49177437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2a5a14fac57_49177437')) {function content_5ae2a5a14fac57_49177437($_smarty_tpl) {?><div class="copyRightWrapper">
	<p class="copyRight">
		&copy; <?php echo $_smarty_tpl->tpl_vars['WK_HTL_ESTABLISHMENT_YEAR']->value;?>
-<?php echo date('Y');?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['WK_HTL_CHAIN_NAME']->value;?>
</a>.&nbsp;<?php echo smartyTranslate(array('s'=>' All rights reserved.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

	</p>
</div><?php }} ?>

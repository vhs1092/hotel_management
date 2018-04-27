<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 00:22:57
         compiled from "C:\xampp\htdocs\hotelcommerce\modules\wkabouthotelblock\views\templates\hook\hotelInteriorFooterExploreLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185375ae2a5a100feb4-67189703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7a59aefdc5c537ea675582b008e928dfa611914' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcommerce\\modules\\wkabouthotelblock\\views\\templates\\hook\\hotelInteriorFooterExploreLink.tpl',
      1 => 1503553336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185375ae2a5a100feb4-67189703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae2a5a1013bb1_49787928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2a5a1013bb1_49787928')) {function content_5ae2a5a1013bb1_49787928($_smarty_tpl) {?><li class="item">
	<a data-block="#hotelInteriorBlock" class="jsFooterTraverseBlock" title="<?php echo smartyTranslate(array('s'=>'Interior','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>
" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelInteriorBlock<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Interior','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>

	</a>
</li><?php }} ?>

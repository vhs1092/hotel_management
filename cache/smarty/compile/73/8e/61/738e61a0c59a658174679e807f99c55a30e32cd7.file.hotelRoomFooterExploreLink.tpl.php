<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 00:22:57
         compiled from "C:\xampp\htdocs\hotelcommerce\modules\wkhotelroom\views\templates\hook\hotelRoomFooterExploreLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295835ae2a5a102e6f4-88405114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '738e61a0c59a658174679e807f99c55a30e32cd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcommerce\\modules\\wkhotelroom\\views\\templates\\hook\\hotelRoomFooterExploreLink.tpl',
      1 => 1503553336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295835ae2a5a102e6f4-88405114',
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
  'unifunc' => 'content_5ae2a5a1039e12_50909876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2a5a1039e12_50909876')) {function content_5ae2a5a1039e12_50909876($_smarty_tpl) {?><li class="item">
	<a data-block="#hotelRoomsBlock" class="jsFooterTraverseBlock" title="<?php echo smartyTranslate(array('s'=>'Our Rooms','mod'=>'wkhotelroom'),$_smarty_tpl);?>
" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelRoomsBlock<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Our Rooms','mod'=>'wkhotelroom'),$_smarty_tpl);?>

	</a>
</li><?php }} ?>

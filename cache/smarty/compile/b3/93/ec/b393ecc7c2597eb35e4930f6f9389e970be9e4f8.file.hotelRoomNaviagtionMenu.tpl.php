<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 00:22:56
         compiled from "C:\xampp\htdocs\hotelcommerce\modules\wkhotelroom\views\templates\hook\hotelRoomNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168215ae2a5a02ec574-48726024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b393ecc7c2597eb35e4930f6f9389e970be9e4f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcommerce\\modules\\wkhotelroom\\views\\templates\\hook\\hotelRoomNaviagtionMenu.tpl',
      1 => 1503553336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168215ae2a5a02ec574-48726024',
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
  'unifunc' => 'content_5ae2a5a02f7c94_81568594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2a5a02f7c94_81568594')) {function content_5ae2a5a02f7c94_81568594($_smarty_tpl) {?><li>
	<a class="navigation-link jsNaviLink" data-block="#hotelRoomsBlock" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelRoomsBlock<?php }?>"><?php echo smartyTranslate(array('s'=>'Our Rooms','mod'=>'wkhotelroom'),$_smarty_tpl);?>
</a>
</li><?php }} ?>

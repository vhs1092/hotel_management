<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 00:22:56
         compiled from "C:\xampp\htdocs\hotelcommerce\modules\wkhotelfeaturesblock\views\templates\hook\hotelFeatureNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148285ae2a5a02484f6-29846217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a202d5fa2f3521053678d2c67237318ff997181' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcommerce\\modules\\wkhotelfeaturesblock\\views\\templates\\hook\\hotelFeatureNaviagtionMenu.tpl',
      1 => 1503553336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148285ae2a5a02484f6-29846217',
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
  'unifunc' => 'content_5ae2a5a024ff08_24316654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2a5a024ff08_24316654')) {function content_5ae2a5a024ff08_24316654($_smarty_tpl) {?><li>
	<a class="navigation-link jsNaviLink" data-block="#hotelAmenitiesBlock" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelAmenitiesBlock<?php }?>"><?php echo smartyTranslate(array('s'=>'Amenities','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>
</a>
</li><?php }} ?>

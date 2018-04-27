<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 00:22:56
         compiled from "C:\xampp\htdocs\hotelcommerce\modules\wktestimonialblock\views\templates\hook\hotelTestimonialNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205545ae2a5a0338a29-09602017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4df16e6e1e80b6876fb753eea54b00806d58782f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcommerce\\modules\\wktestimonialblock\\views\\templates\\hook\\hotelTestimonialNaviagtionMenu.tpl',
      1 => 1503553336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205545ae2a5a0338a29-09602017',
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
  'unifunc' => 'content_5ae2a5a0340434_64681628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2a5a0340434_64681628')) {function content_5ae2a5a0340434_64681628($_smarty_tpl) {?><li>
	<a class="navigation-link jsNaviLink" data-block="#hotelTestimonialBlock" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelTestimonialBlock<?php }?>"><?php echo smartyTranslate(array('s'=>'Testimonials','mod'=>'blocknevigationmenu'),$_smarty_tpl);?>
</a>
</li><?php }} ?>

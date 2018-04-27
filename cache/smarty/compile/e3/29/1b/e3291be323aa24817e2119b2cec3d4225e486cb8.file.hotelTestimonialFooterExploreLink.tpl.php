<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 00:22:57
         compiled from "C:\xampp\htdocs\hotelcommerce\modules\wktestimonialblock\views\templates\hook\hotelTestimonialFooterExploreLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302365ae2a5a1045539-46479382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3291be323aa24817e2119b2cec3d4225e486cb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcommerce\\modules\\wktestimonialblock\\views\\templates\\hook\\hotelTestimonialFooterExploreLink.tpl',
      1 => 1503553336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302365ae2a5a1045539-46479382',
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
  'unifunc' => 'content_5ae2a5a104cf46_76355335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2a5a104cf46_76355335')) {function content_5ae2a5a104cf46_76355335($_smarty_tpl) {?><li class="item">
	<a data-block="#hotelTestimonialBlock" class="jsFooterTraverseBlock" title="<?php echo smartyTranslate(array('s'=>'Testimonials','mod'=>'blocknevigationmenu'),$_smarty_tpl);?>
" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelTestimonialBlock<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Testimonials','mod'=>'blocknevigationmenu'),$_smarty_tpl);?>

	</a>
</li><?php }} ?>

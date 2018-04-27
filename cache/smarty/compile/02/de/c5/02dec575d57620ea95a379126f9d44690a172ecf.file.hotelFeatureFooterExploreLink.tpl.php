<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 00:22:57
         compiled from "C:\xampp\htdocs\hotelcommerce\modules\wkhotelfeaturesblock\views\templates\hook\hotelFeatureFooterExploreLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7505ae2a5a101b5d8-24977476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02dec575d57620ea95a379126f9d44690a172ecf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcommerce\\modules\\wkhotelfeaturesblock\\views\\templates\\hook\\hotelFeatureFooterExploreLink.tpl',
      1 => 1503553336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7505ae2a5a101b5d8-24977476',
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
  'unifunc' => 'content_5ae2a5a1022fe1_88899238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2a5a1022fe1_88899238')) {function content_5ae2a5a1022fe1_88899238($_smarty_tpl) {?><li class="item">
	<a data-block="#hotelAmenitiesBlock" class="jsFooterTraverseBlock" title="<?php echo smartyTranslate(array('s'=>'Amenities','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>
" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelAmenitiesBlock<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Amenities','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>

	</a>
</li><?php }} ?>

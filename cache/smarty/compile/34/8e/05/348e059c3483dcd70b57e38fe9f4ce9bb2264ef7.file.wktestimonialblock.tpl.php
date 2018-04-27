<?php /* Smarty version Smarty-3.1.19, created on 2018-04-27 00:22:56
         compiled from "C:\xampp\htdocs\hotelcommerce\modules\wktestimonialblock\views\templates\hook\wktestimonialblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231725ae2a5a0d4f2f7-23146961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '348e059c3483dcd70b57e38fe9f4ce9bb2264ef7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcommerce\\modules\\wktestimonialblock\\views\\templates\\hook\\wktestimonialblock.tpl',
      1 => 1503553336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231725ae2a5a0d4f2f7-23146961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOTEL_TESIMONIAL_BLOCK_HEADING' => 0,
    'HOTEL_TESIMONIAL_BLOCK_CONTENT' => 0,
    'testimonials_data' => 0,
    'module_dir' => 0,
    'tesimonial' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae2a5a0d66127_72664678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2a5a0d66127_72664678')) {function content_5ae2a5a0d66127_72664678($_smarty_tpl) {?><div id="hotelTestimonialBlock" class="row home_block_container">
    <div class="col-xs-12 col-sm-12">
        <div class="row home_block_desc_wrapper">
            <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                <p class="home_block_heading"><?php echo $_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_HEADING']->value;?>
</p>
                <p class="home_block_description"><?php echo $_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_CONTENT']->value;?>
</p>
                <hr class="home_block_desc_line"/>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['testimonials_data']->value) {?>
            <div class="row home_block_content htlTestemonial-owlCarousel">
                <div class="col-sm-12 col-xs-12">
                    <div class="owl-carousel">
                        <?php  $_smarty_tpl->tpl_vars['tesimonial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tesimonial']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['testimonials_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tesimonial']->key => $_smarty_tpl->tpl_vars['tesimonial']->value) {
$_smarty_tpl->tpl_vars['tesimonial']->_loop = true;
?>
                            <div class="row">
                                <div class='col-xs-4 col-sm-offset-1 col-sm-2'>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/icon-double-codes.png" class="img-responsive">
                                </div>
                                <div class='col-xs-12 col-sm-7'>
                                    <div class="row">
                                        <div class="col-sm-12 testimonialContentContainer">
                                            <p class="testimonialContentText"><?php echo $_smarty_tpl->tpl_vars['tesimonial']->value['testimonial_content'];?>
</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 testimonialPersonDetail">
                                            <?php if (isset($_smarty_tpl->tpl_vars['tesimonial']->value['testimonial_image'])&&$_smarty_tpl->tpl_vars['tesimonial']->value['testimonial_image']) {?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/hotels_testimonials_img/<?php echo $_smarty_tpl->tpl_vars['tesimonial']->value['testimonial_image'];?>
" class="testimonialPersonImg">
                                            <?php }?>
                                            <p class="testimonialPersonName"><?php echo $_smarty_tpl->tpl_vars['tesimonial']->value['name'];?>
</p>
                                            <p class="testimonialPersonDesig"><?php echo $_smarty_tpl->tpl_vars['tesimonial']->value['designation'];?>
</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
<?php }} ?>

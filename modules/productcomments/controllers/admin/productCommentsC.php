<?php

class ProductCommentsCController extends AdminController {

    public function __construct() {
        $module_name = "productcomments";
        Tools::redirectAdmin('index.php?controller=AdminModules&configure=' . $module_name . '&token=' . Tools::getAdminTokenLite('AdminModules'));
    }

}
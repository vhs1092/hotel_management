<?php

class NewsLetterController extends AdminController {

    public function __construct() {
        $module_name = "blocknewsletter";
        Tools::redirectAdmin('index.php?controller=AdminModules&configure=' . $module_name . '&token=' . Tools::getAdminTokenLite('AdminModules'));
    }

}
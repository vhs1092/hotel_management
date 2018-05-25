<?php

class BankWireController extends AdminController {

    public function __construct() {
        $module_name = "bankwire";
        Tools::redirectAdmin('index.php?controller=AdminModules&configure=' . $module_name . '&token=' . Tools::getAdminTokenLite('AdminModules'));
    }

}
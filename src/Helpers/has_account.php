<?php
if (!function_exists('hasAccount')) {
    function hasAccount(){
        return in_array("ConfrariaWeb\Account\Providers\AccountServiceProvider", get_declared_classes());
    }
}
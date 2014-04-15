<?php
/*using this logic hook class for updating the violation status of the partner*/
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class logic_hooks_class {

    function after_save_method($bean, $event, $arguments) {
        session_start();
        global $sugar_config;
        if (isset($_SESSION['kr_flag']) && $_SESSION['kr_flag'] == 1) {
            if ($bean->parent_type == 'kr_Dealers') {
                $partner = BeanFactory::getBean($bean->parent_type, $bean->parent_id);
                $partner->violation_status_c = 'informed';
                $partner->save();
            }
            unset($_SESSION['kr_flag']);
        } 
        //logic
    }

}

?>
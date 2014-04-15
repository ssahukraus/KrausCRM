<?php

    $hook_version = 1;
    $hook_array = Array();

    $hook_array['after_save'] = Array();
    $hook_array['after_save'][] = Array(
        //Processing index. For sorting the array.
        1,
       
        //Label. A string value to identify the hook.
        'after_save example',
       
        //The PHP file where your class is located.
        'custom/modules/Emails/logic_hooks_class.php',
       
        //The class the method is in.
        'logic_hooks_class',
       
        //The method to call.
        'after_save_method'
    );

?>
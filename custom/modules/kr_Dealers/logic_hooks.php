<?php

    $hook_version = 1;
    $hook_array = Array();

    $hook_array['after_ui_frame'] = Array();
    $hook_array['after_ui_frame'][] = Array(
        //Processing index. For sorting the array.
        1, 
        
        //Label. A string value to identify the hook.
        'after_ui_frame example', 
        
        //The PHP file where class is located.
        'custom/modules/kr_Dealers/logic_hooks_class.php', 
        
        //The class the method is in.
        'logic_hooks_class', 
        
        //The method to call.
        'after_ui_frame_method' 
    );

?>
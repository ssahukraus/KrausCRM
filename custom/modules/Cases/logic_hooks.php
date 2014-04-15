<?php
/**
    1. hook execute order
	2. hook name
	3. hook code location
	4. hook code class name
	5. hook code function to execute
 * */ 
    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
    $hook_array = array();
 
    $hook_array['before_save'] = array();
    $hook_array['before_save'][] = Array(1, 'Cases push feed', 'modules/Cases/SugarFeeds/CaseFeed.php','CaseFeed', 'pushFeed');
    // array(hook execute order, 'hook name', 'hook code location', 'hook code class name', 'hook code function to execute')
    $hook_array['before_save'][] = array(2, 'case_closed', 'custom/modules/Cases/case_closed.php', 'case_closed', 'case_closed');
    
  
    
?>
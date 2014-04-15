<?php
/*this file is not required now but refer the same to add a global link */
/*
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

global $app_strings, $current_user;
global $sugar_config, $sugar_version, $sugar_flavor, $server_unique_key, $current_language, $action;

$global_control_links['contact_list_custom'] = array(
'linkinfo' => array($app_strings['LBL_CONTACT_LIST_CUSTOM'] => 'javascript:void(window.open(\'http://reports.kraususa.net/ReportServer/Pages/ReportViewer.aspx?%2fBI+Reports%2fCRM+Contacts+Partners&rs:Command=Render&rs:Format=EXCEL&rc:LinkTarget=_blank\'))'),
'submenu' => ''
 );


/*follow this code to add link without creating the lable on 'custom/include/language/en_us.lang.php'
 * 
 $global_control_links['testing'] = array('linkinfo' => 
    array("Contact List" => 'http://reports.kraususa.net/ReportServer/Pages/ReportViewer.aspx?%2fBI+Reports%2fCRM+Contacts+Partners&rs:Command=Render&rs:Format=EXCEL&rc:LinkTarget=_blank'),
    'submenu' => ''
);
 * 
 */
 ?>
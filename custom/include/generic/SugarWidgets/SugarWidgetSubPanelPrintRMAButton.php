<?php
//SugarWidgetSubPanelCreateOrderButton
 
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to customerservice@kraususa.com so we can send you a copy immediately.
 *
 * @author Alex Lukyanov
 * @copyright   Copyright (c) 2013 Kraus USA. (http://www.kraususa.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Created: Sep 30, 2013
 *
 */
class SugarWidgetSubPanelPrintRMAButton extends SugarWidgetField
{
	 
 function displayHeaderCell(&$layout_def){
    	if(!empty($layout_def['displayHeaderCell']) && $layout_def['displayHeaderCell'] == false) {
    		return ' ';
    	}
    	else {
    		return parent::displayHeaderCell($layout_def);
    	}
    }
 
 
	function displayList($layout_def)
	{	 
		$module = '';
		
		if(isset($layout_def['varname']))
		{
			$key = strtoupper($layout_def['varname']);
		}
		else
		{
			$key = $this->_get_column_alias($layout_def);
			$key = strtoupper($key);
		}
				
		if(empty($layout_def['target_record_key']))
		{
			$record = $layout_def['fields']['ID'];
		}
		else
		{
			$record_key = strtoupper($layout_def['target_record_key']);
			$record = $layout_def['fields'][$record_key];
		}
	
		if(!empty($layout_def['target_module_key'])) {
			if (!empty($layout_def['fields'][strtoupper($layout_def['target_module_key'])])) {
				$module=$layout_def['fields'][strtoupper($layout_def['target_module_key'])];
			}
		}
		
		//links to email module now need additional information.
		//this is to resolve the information about the target of the emails. necessitated by feature that allow
		//only on email record for the whole campaign.
		$parent='';
		if (!empty($layout_def['parent_info'])) {
			if (!empty($focus)){
				$parent="&parent_id=".$focus->id;
				$parent.="&parent_module=".$focus->module_dir;
			}
		} else {
			if(!empty($layout_def['parent_id'])) {
				if (isset($layout_def['fields'][strtoupper($layout_def['parent_id'])])) {
					$parent.="&parent_id=".$layout_def['fields'][strtoupper($layout_def['parent_id'])];
				}
			}
			if(!empty($layout_def['parent_module'])) {
				if (isset($layout_def['fields'][strtoupper($layout_def['parent_module'])])) {
					$parent.="&parent_module=".$layout_def['fields'][strtoupper($layout_def['parent_module'])];
				}
			}
		}
		
		$action = 'DetailView';		
		
		if (empty($module)) {
			if(empty($layout_def['target_module']))
			{
				$module = $layout_def['module'];
			}
			else
			{
				$module = $layout_def['target_module'];
			}
		}
				 		 					
		$link = "index.php?module=$module&action=printrma&record={$record}{$parent}";
				
		return	"<a href=\"javascript:void(0);\" onclick=\"window.open('".$link."','Print RMA','height=600,width=800');\" >Print RMA</a>";
		 			 				 	 
		}

}
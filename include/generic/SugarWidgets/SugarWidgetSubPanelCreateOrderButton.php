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
 * Created: Apr 23, 2013
 *
 */
class SugarWidgetSubPanelCreateOrderButton extends SugarWidgetSubPanelTopButton
{

	function &_get_form($defines, $additionalFormFields = null)
	{
		global $app_strings;
		global $currentModule;
	 	
		if(!empty($this->module))
		{
			$defines['child_module_name'] = $this->module;
		}
		else
		{
			$defines['child_module_name'] = $defines['module'];
		}
 			
		$defines['parent_bean_name'] = get_class( $defines['focus']);	
		$relationship_name = $this->get_subpanel_relationship_name($defines);
		  
		//index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3DSM_SalesOrder%26action%3DEditView%26return_module%3DSM_SalesOrder%26return_action%3DDetailView
		//$link = "index.php?module=SM_SalesOrder&action=EditView&return_module={$currentModule}&return_action={$defines['action']}&return_id={$defines['focus']->id}&return_relationship={$relationship_name}&{$relationship_name}={$defines['focus']->name}";
		//cases_sm_salesorder_1_name
		 
		$link = "index.php?module=SM_SalesOrder&action=EditView&{$relationship_name}_name={$defines['focus']->name}&cases_sm_salesorder_1cases_ida={$defines['focus']->id}&account_c={$defines['focus']->account_name}&account_id_c={$defines['focus']->account_id}";

	 	 return	"<script type=\"text/javascript\">var timer,win; function polling(){if (win && win.closed) {clearInterval(timer);location.reload();}} timer = setInterval('polling()',100);</script><a href=\"javascript:void(0);\" onclick=\"win=window.open('".$link."','Create','height=800,width=1200'); \" >Create</a>";	 
	}
	
	
	/**
	 * get_subpanel_relationship_name
	 * Get the relationship name based on the subapnel definition
	 * @param mixed $defines The subpanel definition
	 */
	function get_subpanel_relationship_name($defines) {
		$relationship_name = '';
		if(!empty($defines)) {
			$relationship_name = isset($defines['module']) ? $defines['module'] : '';
			$dataSource = $defines['subpanel_definition']->get_data_source_name(true);
			if (!empty($dataSource)) {
				$relationship_name = $dataSource;
				//Try to set the relationship name to the real relationship, not the link.
				if (!empty($defines['subpanel_definition']->parent_bean->field_defs[$dataSource])
				&& !empty($defines['subpanel_definition']->parent_bean->field_defs[$dataSource]['relationship']))
				{
					$relationship_name = $defines['subpanel_definition']->parent_bean->field_defs[$dataSource]['relationship'];
				}
			}
		}
		return  $relationship_name;
	}
	
	function display($defines, $additionalFormFields = null, $nonbutton = false)
	{
		$temp='';
		$inputID = $this->getWidgetId();
			
		if(!empty($this->acl) && ACLController::moduleSupportsACL($defines['module'])  &&  !ACLController::checkAccess($defines['module'], $this->acl, true)){
			return $temp;
		}
	
		global $app_strings;
	
		if ( isset($_REQUEST['layout_def_key']) && $_REQUEST['layout_def_key'] == 'UserEAPM' ) {
			// Subpanels generally don't go on the editview, so we have to handle this special
			$megaLink = $this->_get_form($defines, $additionalFormFields,true);			
		} else {
			$button = $this->_get_form($defines, $additionalFormFields);
		}
	
		 
		return $button;
	}
}
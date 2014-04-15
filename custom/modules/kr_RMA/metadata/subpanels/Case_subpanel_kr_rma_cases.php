<?php
// created: 2013-09-26 14:04:24
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'rma_number' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_RMA_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'account' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_ACCOUNT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'account_id_c',
  ),
  'date_modified' => 
  array ( 
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'print_rma_button' =>
  array (
  		'vname' => 'LBL_PRINT_BUTTON',
  		'widget_class' => 'SubPanelPrintRMAButton',
  		'module' => 'kr_RMA',
  		'width' => '4%',
  		'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'kr_RMA',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'kr_RMA',
    'width' => '5%',
    'default' => true,
  ),
);
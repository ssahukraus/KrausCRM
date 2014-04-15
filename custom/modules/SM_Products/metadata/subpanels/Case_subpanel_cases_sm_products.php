<?php
// created: 2012-05-11 20:33:50
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),

		'type' =>
 array (
				'vname' => 'Type',
				'widget_class' => 'SubPanelDetailViewProductType',
				'width' => '85%',
				'default' => true,
		),	

  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'SM_Products',
    'width' => '5%',
    'default' => true,
  ),
);

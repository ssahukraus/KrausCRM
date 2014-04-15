<?php
 // created: 2013-04-24 11:54:02
$layout_defs["Cases"]["subpanel_setup"]['cases_sm_salesorder_1'] = array (
  'order' => 100,
  'module' => 'SM_SalesOrder',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CASES_SM_SALESORDER_1_FROM_SM_SALESORDER_TITLE',
  'get_subpanel_data' => 'cases_sm_salesorder_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

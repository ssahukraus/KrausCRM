<?php
 // created: 2013-04-24 12:13:18
$layout_defs["SM_SalesOrder"]["subpanel_setup"]['sm_salesorder_sm_quotes_1'] = array (
  'order' => 100,
  'module' => 'SM_Quotes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SM_SALESORDER_SM_QUOTES_1_FROM_SM_QUOTES_TITLE',
  'get_subpanel_data' => 'sm_salesorder_sm_quotes_1',
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

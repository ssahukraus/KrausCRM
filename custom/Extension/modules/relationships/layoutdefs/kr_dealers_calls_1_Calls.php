<?php
 // created: 2014-02-11 13:12:50
$layout_defs["Calls"]["subpanel_setup"]['kr_dealers_calls_1'] = array (
  'order' => 100,
  'module' => 'kr_Dealers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_KR_DEALERS_CALLS_1_FROM_KR_DEALERS_TITLE',
  'get_subpanel_data' => 'kr_dealers_calls_1',
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

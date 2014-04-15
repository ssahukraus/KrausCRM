<?php
 // created: 2014-02-21 11:09:36

$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_kr_violation_1'] = array (
  'order' => 100,
  'module' => 'kr_Violation',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_KR_DEALERS_KR_VIOLATION_1_FROM_KR_VIOLATION_TITLE',
  'get_subpanel_data' => 'kr_dealers_kr_violation_1',
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

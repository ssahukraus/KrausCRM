<?php
 // created: 2013-10-29 15:50:09
$layout_defs["SM_Quotes"]["subpanel_setup"]['kr_rma_sm_quotes'] = array (
  'order' => 100,
  'module' => 'kr_RMA',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_KR_RMA_SM_QUOTES_FROM_KR_RMA_TITLE',
  'get_subpanel_data' => 'kr_rma_sm_quotes',
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

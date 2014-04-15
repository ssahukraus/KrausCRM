<?php
 // created: 2014-02-25 09:24:27
$layout_defs["Contacts"]["subpanel_setup"]['kr_supplier_contacts_1'] = array (
  'order' => 100,
  'module' => 'kr_supplier',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_KR_SUPPLIER_CONTACTS_1_FROM_KR_SUPPLIER_TITLE',
  'get_subpanel_data' => 'kr_supplier_contacts_1',
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

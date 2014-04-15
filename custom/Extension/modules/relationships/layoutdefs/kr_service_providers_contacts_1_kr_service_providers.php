<?php
 // created: 2014-02-25 09:21:05
$layout_defs["kr_service_providers"]["subpanel_setup"]['kr_service_providers_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_KR_SERVICE_PROVIDERS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'kr_service_providers_contacts_1',
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

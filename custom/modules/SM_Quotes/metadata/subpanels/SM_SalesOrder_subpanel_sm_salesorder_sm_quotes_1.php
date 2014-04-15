<?php
// created: 2013-04-24 14:23:06
$subpanel_layout['list_fields'] = array (
  'product_sku_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PRODUCT_SKU',
    'id' => 'SM_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'SM_Products',
    'target_record_key' => 'sm_products_id_c',
  ),
  'product_qty_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_PRODUCT_QTY',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'SM_Quotes',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'SM_Quotes',
    'width' => '5%',
    'default' => true,
  ),
);
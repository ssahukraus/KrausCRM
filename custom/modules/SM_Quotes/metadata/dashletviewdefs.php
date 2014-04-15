<?php
$dashletData['SM_QuotesDashlet']['searchFields'] = array (
  'product_sku_c' => 
  array (
    'default' => '',
  ),
);
$dashletData['SM_QuotesDashlet']['columns'] = array (
  'product_sku_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_SKU',
    'id' => 'SM_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'product_sku_c',
  ),
  'product_qty_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PRODUCT_QTY',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'totalamount' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TOTALAMOUNT',
    'currency_format' => true,
    'default' => false,
    'name' => 'totalamount',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'quoteexpires' => 
  array (
    'width' => '10%',
    'label' => 'LBL_QUOTEEXPIRES',
    'default' => false,
    'name' => 'quoteexpires',
  ),
);

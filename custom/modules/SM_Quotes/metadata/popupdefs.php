<?php
$popupMeta = array (
    'moduleMain' => 'SM_Quotes',
    'varName' => 'SM_Quotes',
    'orderBy' => 'sm_quotes.name',
    'whereClauses' => array (
  'product_sku_c' => 'sm_quotes.product_sku_c',
  'product_qty_c' => 'sm_quotes_cstm.product_qty_c',
  'created_by_name' => 'sm_quotes.created_by_name',
),
    'searchInputs' => array (
  4 => 'product_sku_c',
  5 => 'product_qty_c',
  6 => 'created_by_name',
),
    'searchdefs' => array (
  'product_sku_c' => 
  array (
    'type' => 'relate',
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
    'label' => 'LBL_PRODUCT_QTY',
    'width' => '10%',
    'name' => 'product_qty_c',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'name' => 'created_by_name',
  ),
),
);

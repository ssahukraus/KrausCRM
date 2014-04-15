<?php
$popupMeta = array (
    'moduleMain' => 'SM_Products',
    'varName' => 'SM_Products',
    'orderBy' => 'sm_products.name',
    'whereClauses' => array (
  'name' => 'sm_products.name',
  'sku_c' => 'sm_products_cstm.sku_c',
  'created_by_name' => 'sm_products.created_by_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'sku_c',
  5 => 'created_by_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
  ),
  'sku_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SKU',
    'width' => '10%',
    'name' => 'sku_c',
  ),
  'created_by_name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by_name',
  ),
),
);

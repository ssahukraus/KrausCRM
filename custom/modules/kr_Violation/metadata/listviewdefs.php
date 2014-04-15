<?php
$module_name = 'kr_Violation';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'WEBSITE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_WEBSITE',
    'id' => 'KR_WEBSITE_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'PRODUCT_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT',
    'id' => 'SM_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'SELLER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SELLER',
    'width' => '10%',
    'default' => true,
  ),
  'CUSTOMER_PRICE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CUSTOMER_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'MAP_PRICE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MAP_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'BATCH_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_BATCH_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>

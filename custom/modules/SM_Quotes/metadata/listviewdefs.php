<?php
$module_name = 'SM_Quotes';
$listViewDefs [$module_name] = 
array (
  'PRODUCT_SKU_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_SKU',
    'id' => 'SM_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'PRODUCT_QTY_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PRODUCT_QTY',
    'width' => '10%',
  ),
  'LINEITEMTOTAL' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LINEITEMTOTAL',
    'currency_format' => true,
    'default' => false,
  ),
  'DELIVERYREQUESTDATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DELIVERYREQUESTDATE',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_NAME',
    'default' => false,
  ),
  'TOTALAMOUNT' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TOTALAMOUNT',
    'currency_format' => true,
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'QUOTEEXPIRES' => 
  array (
    'width' => '10%',
    'label' => 'LBL_QUOTEEXPIRES',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
  'QUOTEEFFECTIVEFROM' => 
  array (
    'width' => '10%',
    'label' => 'LBL_QUOTEEFFECTIVEFROM',
    'default' => false,
  ),
);
?>

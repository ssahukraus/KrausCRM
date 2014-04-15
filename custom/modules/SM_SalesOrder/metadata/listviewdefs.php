<?php
$module_name = 'SM_SalesOrder';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'SHIPPING_CARRIER_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SHIPPING_CARRIER',
    'width' => '10%',
  ),
  'SHIPPING_METHOD_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SHIPPING_METHOD',
    'width' => '10%',
  ),
  'ACCOUNT_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_NAME',
    'default' => false,
  ),
  'DETAILAMOUNT' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DETAILAMOUNT',
    'currency_format' => true,
    'default' => false,
  ),
  'ORDERDISCOUNT' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ORDERDISCOUNT',
    'default' => false,
  ),
  'TOTALTAX' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TOTALTAX',
    'currency_format' => true,
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_MODIFIED',
    'default' => false,
  ),
  'REQUESTEDDELIVERYDATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_REQUESTEDDELIVERYDATE',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => false,
  ),
  'TOTALAMOUNT' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TOTALAMOUNT',
    'currency_format' => true,
    'default' => false,
  ),
);
?>

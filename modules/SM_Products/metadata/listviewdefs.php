<?php
$module_name = 'SM_Products';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CURRENTCOST' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CURRENTCOST',
    'currency_format' => true,
    'default' => true,
  ),
  'LISTPRICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LISTPRICE',
    'currency_format' => true,
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => true,
  ),
  'QUANTITYONHAND' => 
  array (
    'width' => '10%',
    'label' => 'LBL_QUANTITYONHAND',
    'default' => false,
  ),
  'PRODUCTTYPECODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRODUCTTYPECODE',
    'default' => false,
  ),
  'STDCOST' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STDCOST',
    'currency_format' => true,
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_MODIFIED',
    'default' => false,
  ),
);
?>

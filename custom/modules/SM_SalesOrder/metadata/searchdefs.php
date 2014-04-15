<?php
$module_name = 'SM_SalesOrder';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'type_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type_c',
      ),
      'status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status_c',
      ),
      'account_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNT',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'account_c',
      ),
      'shipping_carrier_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SHIPPING_CARRIER',
        'width' => '10%',
        'name' => 'shipping_carrier_c',
      ),
      'shipping_method_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SHIPPING_METHOD',
        'width' => '10%',
        'name' => 'shipping_method_c',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'type_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type_c',
      ),
      'status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status_c',
      ),
      'account_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNT',
        'link' => true,
        'width' => '10%',
        'id' => 'ACCOUNT_ID_C',
        'name' => 'account_c',
      ),
      'shipping_method_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SHIPPING_METHOD',
        'width' => '10%',
        'name' => 'shipping_method_c',
      ),
      'cases_sm_salesorder_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CASES_SM_SALESORDER_1_FROM_CASES_TITLE',
        'id' => 'CASES_SM_SALESORDER_1CASES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'cases_sm_salesorder_1_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>

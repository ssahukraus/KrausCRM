<?php
$dashletData['SM_SalesOrderDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'type_c' => 
  array (
    'default' => '',
  ),
  'status_c' => 
  array (
    'default' => '',
  ),
  'account_c' => 
  array (
    'default' => '',
  ),
  'cases_sm_salesorder_1_name' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
);
$dashletData['SM_SalesOrderDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
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
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
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
  'totalamount' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TOTALAMOUNT',
    'currency_format' => true,
    'default' => false,
    'name' => 'totalamount',
  ),
  'shipping_method_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SHIPPING_METHOD',
    'width' => '10%',
  ),
);

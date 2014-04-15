<?php
$popupMeta = array (
    'moduleMain' => 'SM_SalesOrder',
    'varName' => 'SM_SalesOrder',
    'orderBy' => 'sm_salesorder.name',
    'whereClauses' => array (
  'name' => 'sm_salesorder.name',
  'type_c' => 'sm_salesorder_cstm.type_c',
  'status_c' => 'sm_salesorder_cstm.status_c',
  'cases_sm_salesorder_1_name' => 'sm_salesorder.cases_sm_salesorder_1_name',
  'account_c' => 'sm_salesorder.account_c',
  'shipping_method_c' => 'sm_salesorder_cstm.shipping_method_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'type_c',
  5 => 'status_c',
  6 => 'cases_sm_salesorder_1_name',
  7 => 'account_c',
  8 => 'shipping_method_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'type_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type_c',
  ),
  'status_c' => 
  array (
    'type' => 'enum',
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
    'name' => 'cases_sm_salesorder_1_name',
  ),
  'account_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'account_c',
  ),
  'shipping_method_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SHIPPING_METHOD',
    'width' => '10%',
    'name' => 'shipping_method_c',
  ),
),
);

<?php
$dashletData['kr_RMADashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'rma_number' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'kr_rma_cases_name' => 
  array (
    'default' => '',
  ),
  'account' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['kr_RMADashlet']['columns'] = array (
  'rma_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RMA_NUMBER',
    'width' => '10%',
    'default' => true,
    'name' => 'rma_number',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
  'kr_rma_cases_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_KR_RMA_CASES_FROM_CASES_TITLE',
    'id' => 'KR_RMA_CASESCASES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'kr_rma_cases_name',
  ),
  'account' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'account',
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
);

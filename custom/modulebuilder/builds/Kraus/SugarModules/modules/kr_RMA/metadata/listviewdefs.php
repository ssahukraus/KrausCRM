<?php
$module_name = 'kr_RMA';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'RMA_NUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RMA_NUMBER',
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
  'DEALER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DEALER',
    'id' => 'KR_DEALERS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'KR_RMA_CASES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_KR_RMA_CASES_FROM_CASES_TITLE',
    'id' => 'KR_RMA_CASESCASES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>

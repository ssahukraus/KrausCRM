<?php
$module_name = 'kr_RMA';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'rma_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_RMA_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'rma_number',
      ),
      'dealer' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_DEALER',
        'id' => 'KR_DEALERS_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'dealer',
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
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'kr_rma_cases_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_KR_RMA_CASES_FROM_CASES_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'KR_RMA_CASESCASES_IDA',
        'name' => 'kr_rma_cases_name',
      ),
      'account' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNT',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_ID_C',
        'name' => 'account',
      ),
      'rma_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_RMA_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'rma_number',
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
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>

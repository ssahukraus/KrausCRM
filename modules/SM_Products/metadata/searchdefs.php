<?php
$module_name = 'SM_Products';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'label' => 'LBL_NAME',
        'default' => true,
      ),
      'producttypecode' => 
      array (
        'width' => '10%',
        'label' => 'LBL_PRODUCTTYPECODE',
        'default' => true,
        'name' => 'producttypecode',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'label' => 'LBL_NAME',
        'default' => true,
      ),
      'producttypecode' => 
      array (
        'width' => '10%',
        'label' => 'LBL_PRODUCTTYPECODE',
        'default' => true,
        'name' => 'producttypecode',
      ),
      'description' => 
      array (
        'width' => '10%',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'default' => true,
        'name' => 'description',
      ),
      'created_by_name' => 
      array (
        'width' => '10%',
        'label' => 'LBL_CREATED',
        'default' => true,
        'name' => 'created_by_name',
      ),
      'quantityonhand' => 
      array (
        'width' => '10%',
        'label' => 'LBL_QUANTITYONHAND',
        'default' => true,
        'name' => 'quantityonhand',
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

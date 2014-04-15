<?php
$module_name = 'SM_BusinessUnits';
$_module_name = 'sm_businessunits';
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
      'phone_office' => 
      array (
        'name' => 'phone_office',
        'label' => 'LBL_PHONE_OFFICE',
        'default' => true,
      ),
      'sm_businessunits_type' => 
      array (
        'width' => '10%',
        'label' => 'LBL_TYPE',
        'default' => true,
        'name' => 'sm_businessunits_type',
      ),
      'shipping_address_city' => 
      array (
        'width' => '10%',
        'label' => 'LBL_SHIPPING_ADDRESS_CITY',
        'default' => true,
        'name' => 'shipping_address_city',
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
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
      ),
      'sm_businessunits_type' => 
      array (
        'name' => 'sm_businessunits_type',
        'label' => 'LBL_TYPE',
        'default' => true,
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
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
      'address_street' => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
      ),
      'address_state' => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
      ),
      'address_postalcode' => 
      array (
        'name' => 'address_postalcode',
        'label' => 'LBL_POSTAL_CODE',
        'type' => 'name',
        'default' => true,
      ),
      'employees' => 
      array (
        'name' => 'employees',
        'label' => 'LBL_EMPLOYEES',
        'default' => true,
      ),
      'locid' => 
      array (
        'width' => '10%',
        'label' => 'LBL_LOCID',
        'default' => true,
        'name' => 'locid',
      ),
      'compid' => 
      array (
        'width' => '10%',
        'label' => 'LBL_COMPID',
        'default' => true,
        'name' => 'compid',
      ),
      'srcid' => 
      array (
        'width' => '10%',
        'label' => 'LBL_SRCID',
        'default' => true,
        'name' => 'srcid',
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

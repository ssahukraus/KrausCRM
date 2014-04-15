<?php
$viewdefs ['SM_SalesOrder'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'account_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT',
          ),
          1 => 
          array (
            'name' => 'cases_sm_salesorder_1_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'shipping_method_c',
            'studio' => 'visible',
            'label' => 'LBL_SHIPPING_METHOD',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'shipping_carrier_c',
            'studio' => 'visible',
            'label' => 'LBL_SHIPPING_CARRIER',
          ),
        ),
      ),
    ),
  ),
);
?>

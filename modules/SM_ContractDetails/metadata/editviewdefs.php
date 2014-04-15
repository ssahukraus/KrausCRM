<?php
$module_name = 'SM_ContractDetails';
$viewdefs [$module_name] = 
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
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'sm_contracts_sm_contractdetails_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sm_products_sm_contractdetails_name',
          ),
          1 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sm_chargecodes_sm_contractdetails_name',
          ),
        ),
      ),
    ),
  ),
);
?>

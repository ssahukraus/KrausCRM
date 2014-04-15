<?php
$module_name = 'SM_Quotes';
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
      'quoteexpires' => 
      array (
        'width' => '10%',
        'label' => 'LBL_QUOTEEXPIRES',
        'default' => true,
        'name' => 'quoteexpires',
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
      'totalamount' => 
      array (
        'width' => '10%',
        'label' => 'LBL_TOTALAMOUNT',
        'currency_format' => true,
        'default' => true,
        'name' => 'totalamount',
      ),
      'quoteeffectivefrom' => 
      array (
        'width' => '10%',
        'label' => 'LBL_QUOTEEFFECTIVEFROM',
        'default' => true,
        'name' => 'quoteeffectivefrom',
      ),
      'quoteexpires' => 
      array (
        'width' => '10%',
        'label' => 'LBL_QUOTEEXPIRES',
        'default' => true,
        'name' => 'quoteexpires',
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

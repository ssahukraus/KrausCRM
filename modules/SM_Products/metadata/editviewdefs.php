<?php
// created: 2012-10-22 17:17:23
$viewdefs['SM_Products']['EditView'] = array (
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
          'name' => 'quantityonhand',
          'label' => 'LBL_QUANTITYONHAND',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'producttypecode',
          'label' => 'LBL_PRODUCTTYPECODE',
        ),
        1 => 
        array (
          'name' => 'currency_id',
          'label' => 'LBL_CURRENCY',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'listprice',
          'label' => 'LBL_LISTPRICE',
        ),
        1 => 
        array (
          'name' => 'stdcost',
          'label' => 'LBL_STDCOST',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'currentcost',
          'label' => 'LBL_CURRENTCOST',
        ),
        1 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'producturl',
          'label' => 'LBL_PRODUCTURL',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
  ),
);
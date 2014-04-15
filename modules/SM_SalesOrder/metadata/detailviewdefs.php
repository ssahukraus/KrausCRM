<?php
// created: 2012-10-22 17:17:23
$viewdefs['SM_SalesOrder']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'EDIT',
        1 => 'DUPLICATE',
        2 => 'DELETE',
      ),
    ),
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
      'LBL_PANEL1' => 
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
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'modified_by_name',
          'label' => 'LBL_MODIFIED_NAME',
        ),
        1 => 
        array (
          'name' => 'date_modified',
          'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          'label' => 'LBL_DATE_MODIFIED',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
        ),
        1 => 
        array (
          'name' => 'date_entered',
          'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          'label' => 'LBL_DATE_ENTERED',
        ),
      ),
    ),
    'lbl_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'currency_id',
          'label' => 'LBL_CURRENCY',
        ),
        1 => 
        array (
          'name' => 'requesteddeliverydate',
          'label' => 'LBL_REQUESTEDDELIVERYDATE',
        ),
      ),
      1 => 
      array (
        0 => NULL,
        1 => 
        array (
          'name' => 'detailamount',
          'label' => 'LBL_DETAILAMOUNT',
        ),
      ),
      2 => 
      array (
        0 => NULL,
        1 => 
        array (
          'name' => 'orderdiscount',
          'label' => 'LBL_ORDERDISCOUNT',
        ),
      ),
      3 => 
      array (
        0 => NULL,
        1 => 
        array (
          'name' => 'totaltax',
          'label' => 'LBL_TOTALTAX',
        ),
      ),
      4 => 
      array (
        0 => NULL,
        1 => 
        array (
          'name' => 'totalamount',
          'label' => 'LBL_TOTALAMOUNT',
        ),
      ),
    ),
  ),
);
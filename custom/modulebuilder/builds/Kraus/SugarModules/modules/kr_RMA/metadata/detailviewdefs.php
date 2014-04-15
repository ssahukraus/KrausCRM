<?php
$module_name = 'kr_RMA';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
      'useTabs' => false,
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rma_number',
            'label' => 'LBL_RMA_NUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'dealer',
            'studio' => 'visible',
            'label' => 'LBL_DEALER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'account',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'kr_rma_cases_name',
          ),
        ),
        6 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'reason',
            'studio' => 'visible',
            'label' => 'LBL_REASON',
          ),
        ),
      ),
    ),
  ),
);
?>

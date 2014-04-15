<?php
$module_name = 'kr_RMA';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'kr_rma_cases_name',
            'label' => 'LBL_KR_RMA_CASES_FROM_CASES_TITLE',
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
            'name' => 'description_html',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION_HTML',
          ),
        ),
        6 => 
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

<?php
// created: 2012-10-22 17:17:23
$viewdefs['SM_BusinessUnits']['EditView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'SAVE',
        1 => 'CANCEL',
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
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'modules/Accounts/Account.js',
      ),
    ),
    'tabDefs' => 
    array (
      'LBL_ACCOUNT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_ADDRESS_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_DESCRIPTION_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_account_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
          ),
          'label' => 'LBL_NAME',
        ),
        1 => 
        array (
          'name' => 'phone_office',
          'label' => 'LBL_PHONE_OFFICE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'employees',
          'label' => 'LBL_EMPLOYEES',
        ),
        1 => 
        array (
          'name' => 'phone_alternate',
          'label' => 'LBL_PHONE_ALT',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'sm_businessunits_type',
          'label' => 'LBL_TYPE',
        ),
        1 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
      ),
      3 => 
      array (
        0 => NULL,
      ),
    ),
    'lbl_address_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'billing_address_street',
          'hideLabel' => true,
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'billing',
            'rows' => 2,
            'cols' => 30,
            'maxlength' => 150,
          ),
          'label' => 'LBL_BILLING_ADDRESS_STREET',
        ),
        1 => 
        array (
          'name' => 'shipping_address_street',
          'hideLabel' => true,
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'shipping',
            'copy' => 'billing',
            'rows' => 2,
            'cols' => 30,
            'maxlength' => 150,
          ),
          'label' => 'LBL_SHIPPING_ADDRESS_STREET',
        ),
      ),
    ),
    'lbl_description_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'displayParams' => 
          array (
            'cols' => 80,
            'rows' => 6,
          ),
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
  ),
);
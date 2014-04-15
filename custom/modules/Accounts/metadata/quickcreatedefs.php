<?php
$viewdefs ['Accounts'] = 
array (
  'QuickCreate' => 
  array (
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
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
          ),
          1 => 
          array (
            'name' => 'phone_office',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'email1',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'account_type',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_street',
            'comment' => 'The street address used for for shipping purposes',
            'label' => 'LBL_SHIPPING_ADDRESS_STREET',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_city',
            'comment' => 'The city used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_CITY',
          ),
          1 => 
          array (
            'name' => 'country_code_c',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY_CODE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_state',
            'comment' => 'The state used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_STATE',
          ),
          1 => 
          array (
            'name' => 'shipping_address_postalcode',
            'comment' => 'The zip code used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
          ),
        ),
      ),
    ),
  ),
);
?>

<?php
$module_name = 'kr_service_providers';
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'email_address',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'portal_username',
            'label' => 'LBL_PORTAL_USERNAME',
          ),
          1 => 
          array (
            'name' => 'portal_password',
            'label' => 'LBL_PORTAL_PASSWORD',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'portal_url',
            'label' => 'LBL_PORTAL_URL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'mailing_address',
            'label' => 'LBL_MAILING_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'mailing_address_city',
            'label' => 'LBL_MAILING_ADDRESS_CITY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'mailing_address_state',
            'label' => 'LBL_MAILING_ADDRESS_STATE',
          ),
          1 => 
          array (
            'name' => 'mailing_address_country',
            'label' => 'LBL_MAILING_ADDRESS_COUNTRY',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'mailing_address_postalcode',
            'label' => 'LBL_MAILING_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'note',
            'label' => 'LBL_NOTE',
          ),
        ),
      ),
    ),
  ),
);
?>

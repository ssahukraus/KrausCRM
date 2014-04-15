<?php
$popupMeta = array (
    'moduleMain' => 'kr_Dealers',
    'varName' => 'kr_Dealers',
    'orderBy' => 'kr_dealers.name',
    'whereClauses' => array (
  'name' => 'kr_dealers.name',
  'date_entered' => 'kr_dealers.date_entered',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'date_entered',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'DEALER_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEALER_CODE',
    'width' => '10%',
    'default' => true,
  ),
),
);

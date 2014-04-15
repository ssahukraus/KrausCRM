<?php
$dashletData['SM_QuotesDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'quoteexpires' => 
  array (
    'default' => '',
  ),
  'created_by' => 
  array (
    'default' => '',
  ),
);
$dashletData['SM_QuotesDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'totalamount' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TOTALAMOUNT',
    'currency_format' => true,
    'default' => true,
  ),
  'quoteexpires' => 
  array (
    'width' => '10%',
    'label' => 'LBL_QUOTEEXPIRES',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
);

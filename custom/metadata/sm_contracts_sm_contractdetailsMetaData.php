<?php
// created: 2009-04-09 14:57:11
$dictionary["sm_contracts_sm_contractdetails"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sm_contracts_sm_contractdetails' => 
    array (
      'lhs_module' => 'SM_Contracts',
      'lhs_table' => 'sm_contracts',
      'lhs_key' => 'id',
      'rhs_module' => 'SM_ContractDetails',
      'rhs_table' => 'sm_contractdetails',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_contracttractdetails_c',
      'join_key_lhs' => 'sm_contraca31dntracts_ida',
      'join_key_rhs' => 'sm_contrac88b7details_idb',
    ),
  ),
  'table' => 'sm_contracttractdetails_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'sm_contraca31dntracts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_contrac88b7details_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_contractontractdetailsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_contractontractdetails_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sm_contraca31dntracts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sm_contractontractdetails_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_contrac88b7details_idb',
      ),
    ),
  ),
);
?>

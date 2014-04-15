<?php
// created: 2013-04-24 12:13:18
$dictionary["sm_salesorder_sm_quotes_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sm_salesorder_sm_quotes_1' => 
    array (
      'lhs_module' => 'SM_SalesOrder',
      'lhs_table' => 'sm_salesorder',
      'lhs_key' => 'id',
      'rhs_module' => 'SM_Quotes',
      'rhs_table' => 'sm_quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_salesorder_sm_quotes_1_c',
      'join_key_lhs' => 'sm_salesorder_sm_quotes_1sm_salesorder_ida',
      'join_key_rhs' => 'sm_salesorder_sm_quotes_1sm_quotes_idb',
    ),
  ),
  'table' => 'sm_salesorder_sm_quotes_1_c',
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
      'name' => 'sm_salesorder_sm_quotes_1sm_salesorder_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_salesorder_sm_quotes_1sm_quotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_salesorder_sm_quotes_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_salesorder_sm_quotes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_salesorder_sm_quotes_1sm_salesorder_ida',
        1 => 'sm_salesorder_sm_quotes_1sm_quotes_idb',
      ),
    ),
  ),
);
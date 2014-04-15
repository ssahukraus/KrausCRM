<?php
// created: 2009-04-09 14:57:11
$dictionary["sm_quotes_sm_quotedetails"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sm_quotes_sm_quotedetails' => 
    array (
      'lhs_module' => 'SM_Quotes',
      'lhs_table' => 'sm_quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'SM_QuoteDetails',
      'rhs_table' => 'sm_quotedetails',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_quotes_squotedetails_c',
      'join_key_lhs' => 'sm_quotes_1ec5_quotes_ida',
      'join_key_rhs' => 'sm_quotes_6eabdetails_idb',
    ),
  ),
  'table' => 'sm_quotes_squotedetails_c',
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
      'name' => 'sm_quotes_1ec5_quotes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_quotes_6eabdetails_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_quotes_sm_quotedetailsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_quotes_sm_quotedetails_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sm_quotes_1ec5_quotes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sm_quotes_sm_quotedetails_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_quotes_6eabdetails_idb',
      ),
    ),
  ),
);
?>

<?php
// created: 2013-10-29 15:50:09
$dictionary["kr_rma_sm_quotes"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'kr_rma_sm_quotes' => 
    array (
      'lhs_module' => 'kr_RMA',
      'lhs_table' => 'kr_rma',
      'lhs_key' => 'id',
      'rhs_module' => 'SM_Quotes',
      'rhs_table' => 'sm_quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'kr_rma_sm_quotes_c',
      'join_key_lhs' => 'kr_rma_sm_quoteskr_rma_ida',
      'join_key_rhs' => 'kr_rma_sm_quotessm_quotes_idb',
    ),
  ),
  'table' => 'kr_rma_sm_quotes_c',
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
      'name' => 'kr_rma_sm_quoteskr_rma_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'kr_rma_sm_quotessm_quotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'kr_rma_sm_quotesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'kr_rma_sm_quotes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'kr_rma_sm_quoteskr_rma_ida',
        1 => 'kr_rma_sm_quotessm_quotes_idb',
      ),
    ),
  ),
);
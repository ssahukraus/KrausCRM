<?php
// created: 2013-10-29 15:50:09
$dictionary["kr_rma_cases"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'kr_rma_cases' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'kr_RMA',
      'rhs_table' => 'kr_rma',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'kr_rma_cases_c',
      'join_key_lhs' => 'kr_rma_casescases_ida',
      'join_key_rhs' => 'kr_rma_caseskr_rma_idb',
    ),
  ),
  'table' => 'kr_rma_cases_c',
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
      'name' => 'kr_rma_casescases_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'kr_rma_caseskr_rma_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'kr_rma_casesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'kr_rma_cases_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'kr_rma_casescases_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'kr_rma_cases_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'kr_rma_caseskr_rma_idb',
      ),
    ),
  ),
);
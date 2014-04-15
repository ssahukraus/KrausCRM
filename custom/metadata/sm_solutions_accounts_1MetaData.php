<?php
// created: 2009-04-09 14:57:12
$dictionary["sm_solutions_accounts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sm_solutions_accounts_1' => 
    array (
      'lhs_module' => 'SM_Solutions',
      'lhs_table' => 'sm_solutions',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_solutions_accounts_1_c',
      'join_key_lhs' => 'sm_solutiod2d2lutions_ida',
      'join_key_rhs' => 'sm_solutio00b5ccounts_idb',
    ),
  ),
  'table' => 'sm_solutions_accounts_1_c',
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
      'name' => 'sm_solutiod2d2lutions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_solutio00b5ccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_solutions_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_solutions_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_solutiod2d2lutions_ida',
        1 => 'sm_solutio00b5ccounts_idb',
      ),
    ),
  ),
);
?>

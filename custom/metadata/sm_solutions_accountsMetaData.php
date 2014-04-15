<?php
// created: 2009-04-09 14:57:12
$dictionary["sm_solutions_accounts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sm_solutions_accounts' => 
    array (
      'lhs_module' => 'SM_Solutions',
      'lhs_table' => 'sm_solutions',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_solutions_accounts_c',
      'join_key_lhs' => 'sm_solutio9667lutions_ida',
      'join_key_rhs' => 'sm_solutioccd2ccounts_idb',
    ),
  ),
  'table' => 'sm_solutions_accounts_c',
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
      'name' => 'sm_solutio9667lutions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_solutioccd2ccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_solutions_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_solutions_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_solutio9667lutions_ida',
        1 => 'sm_solutioccd2ccounts_idb',
      ),
    ),
  ),
);
?>

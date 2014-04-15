<?php
// created: 2014-02-12 06:01:21
$dictionary["kr_dealers_cases_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'kr_dealers_cases_1' => 
    array (
      'lhs_module' => 'kr_Dealers',
      'lhs_table' => 'kr_dealers',
      'lhs_key' => 'id',
      'rhs_module' => 'Cases',
      'rhs_table' => 'cases',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'kr_dealers_cases_1_c',
      'join_key_lhs' => 'kr_dealers_cases_1kr_dealers_ida',
      'join_key_rhs' => 'kr_dealers_cases_1cases_idb',
    ),
  ),
  'table' => 'kr_dealers_cases_1_c',
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
      'name' => 'kr_dealers_cases_1kr_dealers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'kr_dealers_cases_1cases_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'kr_dealers_cases_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'kr_dealers_cases_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'kr_dealers_cases_1kr_dealers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'kr_dealers_cases_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'kr_dealers_cases_1cases_idb',
      ),
    ),
  ),
);
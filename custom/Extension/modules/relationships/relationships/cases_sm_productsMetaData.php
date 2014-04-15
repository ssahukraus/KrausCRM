<?php
// created: 2011-11-30 19:51:29
$dictionary["cases_sm_products"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cases_sm_products' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'SM_Products',
      'rhs_table' => 'sm_products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cases_sm_products_c',
      'join_key_lhs' => 'cases_sm_productscases_ida',
      'join_key_rhs' => 'cases_sm_productssm_products_idb',
    ),
  ),
  'table' => 'cases_sm_products_c',
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
      'name' => 'cases_sm_productscases_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cases_sm_productssm_products_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cases_sm_productsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cases_sm_products_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cases_sm_productscases_ida',
        1 => 'cases_sm_productssm_products_idb',
      ),
    ),
  ),
);
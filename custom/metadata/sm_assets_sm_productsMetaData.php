<?php
// created: 2009-04-09 14:57:10
$dictionary["sm_assets_sm_products"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sm_assets_sm_products' => 
    array (
      'lhs_module' => 'SM_Assets',
      'lhs_table' => 'sm_assets',
      'lhs_key' => 'id',
      'rhs_module' => 'SM_Products',
      'rhs_table' => 'sm_products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_assets_sm_products_c',
      'join_key_lhs' => 'sm_assets_d84e_assets_ida',
      'join_key_rhs' => 'sm_assets_b88droducts_idb',
    ),
  ),
  'table' => 'sm_assets_sm_products_c',
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
      'name' => 'sm_assets_d84e_assets_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_assets_b88droducts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_assets_sm_productsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_assets_sm_products_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_assets_d84e_assets_ida',
        1 => 'sm_assets_b88droducts_idb',
      ),
    ),
  ),
);
?>

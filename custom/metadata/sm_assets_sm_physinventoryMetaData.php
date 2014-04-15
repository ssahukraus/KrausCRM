<?php
// created: 2009-04-09 14:57:10
$dictionary["sm_assets_sm_physinventory"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sm_assets_sm_physinventory' => 
    array (
      'lhs_module' => 'SM_Assets',
      'lhs_table' => 'sm_assets',
      'lhs_key' => 'id',
      'rhs_module' => 'SM_PhysInventory',
      'rhs_table' => 'sm_physinventory',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_assets_shysinventory_c',
      'join_key_lhs' => 'sm_assets_f960_assets_ida',
      'join_key_rhs' => 'sm_assets_e275ventory_idb',
    ),
  ),
  'table' => 'sm_assets_shysinventory_c',
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
      'name' => 'sm_assets_f960_assets_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_assets_e275ventory_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_assets_s_physinventoryspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_assets_s_physinventory_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_assets_f960_assets_ida',
        1 => 'sm_assets_e275ventory_idb',
      ),
    ),
  ),
);
?>

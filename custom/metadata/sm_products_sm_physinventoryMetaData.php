<?php
// created: 2009-04-09 14:57:09
$dictionary["sm_products_sm_physinventory"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sm_products_sm_physinventory' => 
    array (
      'lhs_module' => 'SM_Products',
      'lhs_table' => 'sm_products',
      'lhs_key' => 'id',
      'rhs_module' => 'SM_PhysInventory',
      'rhs_table' => 'sm_physinventory',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_productshysinventory_c',
      'join_key_lhs' => 'sm_product5ab0roducts_ida',
      'join_key_rhs' => 'sm_product9bdeventory_idb',
    ),
  ),
  'table' => 'sm_productshysinventory_c',
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
      'name' => 'sm_product5ab0roducts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_product9bdeventory_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_products_physinventoryspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_products_physinventory_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sm_product5ab0roducts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sm_products_physinventory_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_product9bdeventory_idb',
      ),
    ),
  ),
);
?>

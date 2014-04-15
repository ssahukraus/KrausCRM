<?php
// created: 2009-04-09 14:57:09
$dictionary["sm_products_contacts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sm_products_contacts' => 
    array (
      'lhs_module' => 'SM_Products',
      'lhs_table' => 'sm_products',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_products_contacts_c',
      'join_key_lhs' => 'sm_productc0c4roducts_ida',
      'join_key_rhs' => 'sm_product68adontacts_idb',
    ),
  ),
  'table' => 'sm_products_contacts_c',
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
      'name' => 'sm_productc0c4roducts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_product68adontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_products_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_products_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_productc0c4roducts_ida',
        1 => 'sm_product68adontacts_idb',
      ),
    ),
  ),
);
?>

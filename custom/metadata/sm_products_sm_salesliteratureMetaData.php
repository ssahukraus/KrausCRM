<?php
// created: 2009-04-09 14:57:09
$dictionary["sm_products_sm_salesliterature"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sm_products_sm_salesliterature' => 
    array (
      'lhs_module' => 'SM_Products',
      'lhs_table' => 'sm_products',
      'lhs_key' => 'id',
      'rhs_module' => 'SM_SalesLiterature',
      'rhs_table' => 'sm_salesliterature',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_productsesliterature_c',
      'join_key_lhs' => 'sm_product8fferoducts_ida',
      'join_key_rhs' => 'sm_product8bc3erature_idb',
    ),
  ),
  'table' => 'sm_productsesliterature_c',
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
      'name' => 'sm_product8fferoducts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_product8bc3erature_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_productsalesliteraturespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_productsalesliterature_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_product8fferoducts_ida',
        1 => 'sm_product8bc3erature_idb',
      ),
    ),
  ),
);
?>

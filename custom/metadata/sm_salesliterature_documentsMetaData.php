<?php
// created: 2009-04-09 14:57:12
$dictionary["sm_salesliterature_documents"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sm_salesliterature_documents' => 
    array (
      'lhs_module' => 'SM_SalesLiterature',
      'lhs_table' => 'sm_salesliterature',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_saleslitre_documents_c',
      'join_key_lhs' => 'sm_salesli4c58erature_ida',
      'join_key_rhs' => 'sm_salesli0785cuments_idb',
    ),
  ),
  'table' => 'sm_saleslitre_documents_c',
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
      'name' => 'sm_salesli4c58erature_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_salesli0785cuments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_saleslitture_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_saleslitture_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_salesli4c58erature_ida',
        1 => 'sm_salesli0785cuments_idb',
      ),
    ),
  ),
);
?>

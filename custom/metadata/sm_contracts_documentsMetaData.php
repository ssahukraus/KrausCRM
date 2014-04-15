<?php
// created: 2009-04-09 14:57:11
$dictionary["sm_contracts_documents"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sm_contracts_documents' => 
    array (
      'lhs_module' => 'SM_Contracts',
      'lhs_table' => 'sm_contracts',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_contracts_documents_c',
      'join_key_lhs' => 'sm_contrac2837ntracts_ida',
      'join_key_rhs' => 'sm_contracd09ecuments_idb',
    ),
  ),
  'table' => 'sm_contracts_documents_c',
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
      'name' => 'sm_contrac2837ntracts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_contracd09ecuments_idb',
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
      'name' => 'sm_contracts_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_contracts_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_contrac2837ntracts_ida',
        1 => 'sm_contracd09ecuments_idb',
      ),
    ),
  ),
);
?>

<?php
// created: 2014-02-25 09:19:51
$dictionary["kr_service_providers_activities_1_emails"] = array (
  'relationships' => 
  array (
    'kr_service_providers_activities_1_emails' => 
    array (
      'lhs_module' => 'kr_service_providers',
      'lhs_table' => 'kr_service_providers',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'kr_service_providers',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
<?php
// created: 2014-02-25 09:19:50
$dictionary["kr_service_providers_activities_1_meetings"] = array (
  'relationships' => 
  array (
    'kr_service_providers_activities_1_meetings' => 
    array (
      'lhs_module' => 'kr_service_providers',
      'lhs_table' => 'kr_service_providers',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
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
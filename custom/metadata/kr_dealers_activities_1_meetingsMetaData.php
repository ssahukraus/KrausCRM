<?php
// created: 2014-02-11 13:11:50
$dictionary["kr_dealers_activities_1_meetings"] = array (
  'relationships' => 
  array (
    'kr_dealers_activities_1_meetings' => 
    array (
      'lhs_module' => 'kr_Dealers',
      'lhs_table' => 'kr_dealers',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'kr_Dealers',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
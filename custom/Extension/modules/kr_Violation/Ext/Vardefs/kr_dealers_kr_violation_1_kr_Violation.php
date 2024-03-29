<?php
// created: 2014-02-21 11:09:36
$dictionary["kr_Violation"]["fields"]["kr_dealers_kr_violation_1"] = array (
  'name' => 'kr_dealers_kr_violation_1',
  'type' => 'link',
  'relationship' => 'kr_dealers_kr_violation_1',
  'source' => 'non-db',
  'vname' => 'LBL_KR_DEALERS_KR_VIOLATION_1_FROM_KR_DEALERS_TITLE',
  'id_name' => 'kr_dealers_kr_violation_1kr_dealers_ida',
);
$dictionary["kr_Violation"]["fields"]["kr_dealers_kr_violation_1_name"] = array (
  'name' => 'kr_dealers_kr_violation_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_KR_DEALERS_KR_VIOLATION_1_FROM_KR_DEALERS_TITLE',
  'save' => true,
  'id_name' => 'kr_dealers_kr_violation_1kr_dealers_ida',
  'link' => 'kr_dealers_kr_violation_1',
  'table' => 'kr_dealers',
  'module' => 'kr_Dealers',
  'rname' => 'name',
);
$dictionary["kr_Violation"]["fields"]["kr_dealers_kr_violation_1kr_dealers_ida"] = array (
  'name' => 'kr_dealers_kr_violation_1kr_dealers_ida',
  'type' => 'link',
  'relationship' => 'kr_dealers_kr_violation_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_KR_DEALERS_KR_VIOLATION_1_FROM_KR_VIOLATION_TITLE',
);

<?php
// created: 2014-02-12 06:01:21
$dictionary["Case"]["fields"]["kr_dealers_cases_1"] = array (
  'name' => 'kr_dealers_cases_1',
  'type' => 'link',
  'relationship' => 'kr_dealers_cases_1',
  'source' => 'non-db',
  'vname' => 'LBL_KR_DEALERS_CASES_1_FROM_KR_DEALERS_TITLE',
  'id_name' => 'kr_dealers_cases_1kr_dealers_ida',
);
$dictionary["Case"]["fields"]["kr_dealers_cases_1_name"] = array (
  'name' => 'kr_dealers_cases_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_KR_DEALERS_CASES_1_FROM_KR_DEALERS_TITLE',
  'save' => true,
  'id_name' => 'kr_dealers_cases_1kr_dealers_ida',
  'link' => 'kr_dealers_cases_1',
  'table' => 'kr_dealers',
  'module' => 'kr_Dealers',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["kr_dealers_cases_1kr_dealers_ida"] = array (
  'name' => 'kr_dealers_cases_1kr_dealers_ida',
  'type' => 'link',
  'relationship' => 'kr_dealers_cases_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_KR_DEALERS_CASES_1_FROM_CASES_TITLE',
);

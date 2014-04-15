<?php
// created: 2014-03-27 08:17:34
$dictionary["kr_Dealers"]["fields"]["kr_dealers_kr_dealers_1"] = array (
  'name' => 'kr_dealers_kr_dealers_1',
  'type' => 'link',
  'relationship' => 'kr_dealers_kr_dealers_1',
  'source' => 'non-db',
  'vname' => 'LBL_KR_DEALERS_KR_DEALERS_1_FROM_KR_DEALERS_L_TITLE',
  'id_name' => 'kr_dealers_kr_dealers_1kr_dealers_ida',
);
$dictionary["kr_Dealers"]["fields"]["kr_dealers_kr_dealers_1_name"] = array (
  'name' => 'kr_dealers_kr_dealers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_KR_DEALERS_KR_DEALERS_1_FROM_KR_DEALERS_L_TITLE',
  'save' => true,
  'id_name' => 'kr_dealers_kr_dealers_1kr_dealers_ida',
  'link' => 'kr_dealers_kr_dealers_1',
  'table' => 'kr_dealers',
  'module' => 'kr_Dealers',
  'rname' => 'name',
);
$dictionary["kr_Dealers"]["fields"]["kr_dealers_kr_dealers_1kr_dealers_ida"] = array (
  'name' => 'kr_dealers_kr_dealers_1kr_dealers_ida',
  'type' => 'link',
  'relationship' => 'kr_dealers_kr_dealers_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_KR_DEALERS_KR_DEALERS_1_FROM_KR_DEALERS_R_TITLE',
);

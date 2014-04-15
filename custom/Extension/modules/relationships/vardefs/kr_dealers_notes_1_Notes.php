<?php
// created: 2014-02-12 04:43:09
$dictionary["Note"]["fields"]["kr_dealers_notes_1"] = array (
  'name' => 'kr_dealers_notes_1',
  'type' => 'link',
  'relationship' => 'kr_dealers_notes_1',
  'source' => 'non-db',
  'vname' => 'LBL_KR_DEALERS_NOTES_1_FROM_KR_DEALERS_TITLE',
  'id_name' => 'kr_dealers_notes_1kr_dealers_ida',
);
$dictionary["Note"]["fields"]["kr_dealers_notes_1_name"] = array (
  'name' => 'kr_dealers_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_KR_DEALERS_NOTES_1_FROM_KR_DEALERS_TITLE',
  'save' => true,
  'id_name' => 'kr_dealers_notes_1kr_dealers_ida',
  'link' => 'kr_dealers_notes_1',
  'table' => 'kr_dealers',
  'module' => 'kr_Dealers',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["kr_dealers_notes_1kr_dealers_ida"] = array (
  'name' => 'kr_dealers_notes_1kr_dealers_ida',
  'type' => 'link',
  'relationship' => 'kr_dealers_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_KR_DEALERS_NOTES_1_FROM_NOTES_TITLE',
);

<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2013-03-27 18:46:16

 

// created: 2014-02-13 05:31:34
$dictionary["Project"]["fields"]["kr_dealers_project_1"] = array (
  'name' => 'kr_dealers_project_1',
  'type' => 'link',
  'relationship' => 'kr_dealers_project_1',
  'source' => 'non-db',
  'vname' => 'LBL_KR_DEALERS_PROJECT_1_FROM_KR_DEALERS_TITLE',
  'id_name' => 'kr_dealers_project_1kr_dealers_ida',
);
$dictionary["Project"]["fields"]["kr_dealers_project_1_name"] = array (
  'name' => 'kr_dealers_project_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_KR_DEALERS_PROJECT_1_FROM_KR_DEALERS_TITLE',
  'save' => true,
  'id_name' => 'kr_dealers_project_1kr_dealers_ida',
  'link' => 'kr_dealers_project_1',
  'table' => 'kr_dealers',
  'module' => 'kr_Dealers',
  'rname' => 'name',
);
$dictionary["Project"]["fields"]["kr_dealers_project_1kr_dealers_ida"] = array (
  'name' => 'kr_dealers_project_1kr_dealers_ida',
  'type' => 'link',
  'relationship' => 'kr_dealers_project_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_KR_DEALERS_PROJECT_1_FROM_PROJECT_TITLE',
);

?>
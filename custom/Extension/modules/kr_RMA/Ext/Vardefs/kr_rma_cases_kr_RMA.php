<?php
// created: 2013-10-29 15:50:09
$dictionary["kr_RMA"]["fields"]["kr_rma_cases"] = array (
  'name' => 'kr_rma_cases',
  'type' => 'link',
  'relationship' => 'kr_rma_cases',
  'source' => 'non-db',
  'vname' => 'LBL_KR_RMA_CASES_FROM_CASES_TITLE',
  'id_name' => 'kr_rma_casescases_ida',
);
$dictionary["kr_RMA"]["fields"]["kr_rma_cases_name"] = array (
  'name' => 'kr_rma_cases_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_KR_RMA_CASES_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'kr_rma_casescases_ida',
  'link' => 'kr_rma_cases',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["kr_RMA"]["fields"]["kr_rma_casescases_ida"] = array (
  'name' => 'kr_rma_casescases_ida',
  'type' => 'link',
  'relationship' => 'kr_rma_cases',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_KR_RMA_CASES_FROM_KR_RMA_TITLE',
);

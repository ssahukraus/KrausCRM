<?php
// created: 2013-04-24 11:54:02
$dictionary["SM_SalesOrder"]["fields"]["cases_sm_salesorder_1"] = array (
  'name' => 'cases_sm_salesorder_1',
  'type' => 'link',
  'relationship' => 'cases_sm_salesorder_1',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_SM_SALESORDER_1_FROM_CASES_TITLE',
  'id_name' => 'cases_sm_salesorder_1cases_ida',
);
$dictionary["SM_SalesOrder"]["fields"]["cases_sm_salesorder_1_name"] = array (
  'name' => 'cases_sm_salesorder_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_SM_SALESORDER_1_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_sm_salesorder_1cases_ida',
  'link' => 'cases_sm_salesorder_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["SM_SalesOrder"]["fields"]["cases_sm_salesorder_1cases_ida"] = array (
  'name' => 'cases_sm_salesorder_1cases_ida',
  'type' => 'link',
  'relationship' => 'cases_sm_salesorder_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CASES_SM_SALESORDER_1_FROM_SM_SALESORDER_TITLE',
);

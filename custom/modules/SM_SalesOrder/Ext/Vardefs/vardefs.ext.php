<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2013-04-24 12:10:49

 

 // created: 2013-05-10 16:58:46

 

// created: 2013-04-24 12:13:18
$dictionary["SM_SalesOrder"]["fields"]["sm_salesorder_sm_quotes_1"] = array (
  'name' => 'sm_salesorder_sm_quotes_1',
  'type' => 'link',
  'relationship' => 'sm_salesorder_sm_quotes_1',
  'source' => 'non-db',
  'vname' => 'LBL_SM_SALESORDER_SM_QUOTES_1_FROM_SM_QUOTES_TITLE',
);


 // created: 2013-05-01 12:46:06

 

 // created: 2013-05-10 17:12:36

 

 // created: 2013-04-24 12:13:57

 

 // created: 2013-04-24 12:13:57

 

 // created: 2013-05-01 12:46:15
$dictionary['SM_SalesOrder']['fields']['requesteddeliverydate']['massupdate']=0;
$dictionary['SM_SalesOrder']['fields']['requesteddeliverydate']['merge_filter']='disabled';
$dictionary['SM_SalesOrder']['fields']['requesteddeliverydate']['reportable']=true;
$dictionary['SM_SalesOrder']['fields']['requesteddeliverydate']['enable_range_search']=false;

 

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


 // created: 2013-04-24 12:02:59
$dictionary['SM_SalesOrder']['fields']['name']['duplicate_merge']='disabled';
$dictionary['SM_SalesOrder']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['SM_SalesOrder']['fields']['name']['merge_filter']='disabled';
$dictionary['SM_SalesOrder']['fields']['name']['unified_search']=false;

 
?>
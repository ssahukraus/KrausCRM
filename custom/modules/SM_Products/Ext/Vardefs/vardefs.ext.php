<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2012-05-09 21:44:31
$dictionary['SM_Products']['fields']['producturl']['len']='255';
$dictionary['SM_Products']['fields']['producturl']['reportable']=true;
$dictionary['SM_Products']['fields']['producturl']['link_target']='_blank';

 

 // created: 2012-05-11 20:31:48
$dictionary['SM_Products']['fields']['listprice']['reportable']=true;
$dictionary['SM_Products']['fields']['listprice']['enable_range_search']=false;

 

// created: 2009-03-31 13:58:45
$dictionary["SM_Products"]["fields"]["sm_solutions_sm_products"] = array (
  'name' => 'sm_solutions_sm_products',
  'type' => 'link',
  'relationship' => 'sm_solutions_sm_products',
  'source' => 'non-db',
);


// created: 2009-03-31 13:58:46
$dictionary["SM_Products"]["fields"]["sm_products_sm_contractdetails"] = array (
  'name' => 'sm_products_sm_contractdetails',
  'type' => 'link',
  'relationship' => 'sm_products_sm_contractdetails',
  'source' => 'non-db',
);


// created: 2009-03-31 13:58:46
$dictionary["SM_Products"]["fields"]["sm_products_sm_quotedetails"] = array (
  'name' => 'sm_products_sm_quotedetails',
  'type' => 'link',
  'relationship' => 'sm_products_sm_quotedetails',
  'source' => 'non-db',
);


// created: 2009-03-31 13:58:48
$dictionary["SM_Products"]["fields"]["sm_assets_sm_products"] = array (
  'name' => 'sm_assets_sm_products',
  'type' => 'link',
  'relationship' => 'sm_assets_sm_products',
  'source' => 'non-db',
);


// created: 2009-03-31 13:58:48
$dictionary["SM_Products"]["fields"]["sm_vendors_sm_products"] = array (
  'name' => 'sm_vendors_sm_products',
  'type' => 'link',
  'relationship' => 'sm_vendors_sm_products',
  'source' => 'non-db',
  'side' => 'right',
);


// created: 2009-03-31 13:58:48
$dictionary["SM_Products"]["fields"]["sm_vendors_sm_products_name"] = array (
  'name' => 'sm_vendors_sm_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SM_VENDORS_SM_PRODUCTS_FROM_SM_VENDORS_TITLE',
  'save' => true,
  'id_name' => 'sm_vendors2db0vendors_ida',
  'link' => 'sm_vendors_sm_products',
  'table' => 'sm_vendors',
  'module' => 'SM_Vendors',
  'rname' => 'name',
);


// created: 2009-03-31 13:58:48
$dictionary["SM_Products"]["fields"]["sm_vendors2db0vendors_ida"] = array (
  'name' => 'sm_vendors2db0vendors_ida',
  'type' => 'link',
  'relationship' => 'sm_vendors_sm_products',
  'source' => 'non-db',
  'side' => 'right',
);


// created: 2009-04-03 09:04:35
$dictionary["SM_Products"]["fields"]["sm_products_sm_quotedetails"] = array (
  'name' => 'sm_products_sm_quotedetails',
  'type' => 'link',
  'relationship' => 'sm_products_sm_quotedetails',
  'source' => 'non-db',
);


// created: 2009-04-03 09:04:35
$dictionary["SM_Products"]["fields"]["sm_products_sm_chargecodes"] = array (
  'name' => 'sm_products_sm_chargecodes',
  'type' => 'link',
  'relationship' => 'sm_products_sm_chargecodes',
  'source' => 'non-db',
);


// created: 2009-04-03 09:04:35
$dictionary["SM_Products"]["fields"]["sm_products_sm_physinventory"] = array (
  'name' => 'sm_products_sm_physinventory',
  'type' => 'link',
  'relationship' => 'sm_products_sm_physinventory',
  'source' => 'non-db',
);


// created: 2009-04-03 09:04:36
$dictionary["SM_Products"]["fields"]["sm_products_sm_assets"] = array (
  'name' => 'sm_products_sm_assets',
  'type' => 'link',
  'relationship' => 'sm_products_sm_assets',
  'source' => 'non-db',
);


// created: 2009-04-03 09:04:36
$dictionary["SM_Products"]["fields"]["sm_products_sm_salesliterature"] = array (
  'name' => 'sm_products_sm_salesliterature',
  'type' => 'link',
  'relationship' => 'sm_products_sm_salesliterature',
  'source' => 'non-db',
);


// created: 2009-04-03 09:04:36
$dictionary["SM_Products"]["fields"]["sm_products_sm_solutions"] = array (
  'name' => 'sm_products_sm_solutions',
  'type' => 'link',
  'relationship' => 'sm_products_sm_solutions',
  'source' => 'non-db',
);


// created: 2009-04-03 09:04:37
$dictionary["SM_Products"]["fields"]["sm_assets_sm_products"] = array (
  'name' => 'sm_assets_sm_products',
  'type' => 'link',
  'relationship' => 'sm_assets_sm_products',
  'source' => 'non-db',
);


// created: 2009-04-03 09:04:37
$dictionary["SM_Products"]["fields"]["sm_vendors_sm_products"] = array (
  'name' => 'sm_vendors_sm_products',
  'type' => 'link',
  'relationship' => 'sm_vendors_sm_products',
  'source' => 'non-db',
  'side' => 'right',
);


// created: 2009-04-03 09:04:37
$dictionary["SM_Products"]["fields"]["sm_vendors_sm_products_name"] = array (
  'name' => 'sm_vendors_sm_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SM_VENDORS_SM_PRODUCTS_FROM_SM_VENDORS_TITLE',
  'save' => true,
  'id_name' => 'sm_vendors2db0vendors_ida',
  'link' => 'sm_vendors_sm_products',
  'table' => 'sm_vendors',
  'module' => 'SM_Vendors',
  'rname' => 'name',
);


// created: 2009-04-03 09:04:37
$dictionary["SM_Products"]["fields"]["sm_vendors2db0vendors_ida"] = array (
  'name' => 'sm_vendors2db0vendors_ida',
  'type' => 'link',
  'relationship' => 'sm_vendors_sm_products',
  'source' => 'non-db',
  'side' => 'right',
);


// created: 2009-04-03 17:23:46
$dictionary["SM_Products"]["fields"]["sm_products_sm_quotedetails"] = array (
  'name' => 'sm_products_sm_quotedetails',
  'type' => 'link',
  'relationship' => 'sm_products_sm_quotedetails',
  'source' => 'non-db',
);


// created: 2009-04-03 17:23:46
$dictionary["SM_Products"]["fields"]["sm_products_sm_chargecodes"] = array (
  'name' => 'sm_products_sm_chargecodes',
  'type' => 'link',
  'relationship' => 'sm_products_sm_chargecodes',
  'source' => 'non-db',
);


// created: 2009-04-03 17:23:46
$dictionary["SM_Products"]["fields"]["sm_products_sm_physinventory"] = array (
  'name' => 'sm_products_sm_physinventory',
  'type' => 'link',
  'relationship' => 'sm_products_sm_physinventory',
  'source' => 'non-db',
);


// created: 2009-04-03 17:23:46
$dictionary["SM_Products"]["fields"]["sm_products_sm_assets"] = array (
  'name' => 'sm_products_sm_assets',
  'type' => 'link',
  'relationship' => 'sm_products_sm_assets',
  'source' => 'non-db',
);


// created: 2009-04-03 17:23:46
$dictionary["SM_Products"]["fields"]["sm_products_sm_salesliterature"] = array (
  'name' => 'sm_products_sm_salesliterature',
  'type' => 'link',
  'relationship' => 'sm_products_sm_salesliterature',
  'source' => 'non-db',
);


// created: 2009-04-03 17:23:46
$dictionary["SM_Products"]["fields"]["sm_products_sm_solutions"] = array (
  'name' => 'sm_products_sm_solutions',
  'type' => 'link',
  'relationship' => 'sm_products_sm_solutions',
  'source' => 'non-db',
);


// created: 2009-04-03 17:23:48
$dictionary["SM_Products"]["fields"]["sm_assets_sm_products"] = array (
  'name' => 'sm_assets_sm_products',
  'type' => 'link',
  'relationship' => 'sm_assets_sm_products',
  'source' => 'non-db',
);


// created: 2009-04-03 17:23:48
$dictionary["SM_Products"]["fields"]["sm_vendors_sm_products"] = array (
  'name' => 'sm_vendors_sm_products',
  'type' => 'link',
  'relationship' => 'sm_vendors_sm_products',
  'source' => 'non-db',
  'side' => 'right',
);


// created: 2009-04-03 17:23:48
$dictionary["SM_Products"]["fields"]["sm_vendors_sm_products_name"] = array (
  'name' => 'sm_vendors_sm_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SM_VENDORS_SM_PRODUCTS_FROM_SM_VENDORS_TITLE',
  'save' => true,
  'id_name' => 'sm_vendors2db0vendors_ida',
  'link' => 'sm_vendors_sm_products',
  'table' => 'sm_vendors',
  'module' => 'SM_Vendors',
  'rname' => 'name',
);


// created: 2009-04-03 17:23:48
$dictionary["SM_Products"]["fields"]["sm_vendors2db0vendors_ida"] = array (
  'name' => 'sm_vendors2db0vendors_ida',
  'type' => 'link',
  'relationship' => 'sm_vendors_sm_products',
  'source' => 'non-db',
  'side' => 'right',
);


// created: 2009-04-06 10:47:54
$dictionary["SM_Products"]["fields"]["sm_products_sm_quotedetails"] = array (
  'name' => 'sm_products_sm_quotedetails',
  'type' => 'link',
  'relationship' => 'sm_products_sm_quotedetails',
  'source' => 'non-db',
);


// created: 2009-04-06 10:47:54
$dictionary["SM_Products"]["fields"]["sm_products_sm_chargecodes"] = array (
  'name' => 'sm_products_sm_chargecodes',
  'type' => 'link',
  'relationship' => 'sm_products_sm_chargecodes',
  'source' => 'non-db',
);


// created: 2009-04-06 10:47:54
$dictionary["SM_Products"]["fields"]["sm_products_sm_physinventory"] = array (
  'name' => 'sm_products_sm_physinventory',
  'type' => 'link',
  'relationship' => 'sm_products_sm_physinventory',
  'source' => 'non-db',
);


// created: 2009-04-06 10:47:54
$dictionary["SM_Products"]["fields"]["sm_products_sm_assets"] = array (
  'name' => 'sm_products_sm_assets',
  'type' => 'link',
  'relationship' => 'sm_products_sm_assets',
  'source' => 'non-db',
);


// created: 2009-04-06 10:47:54
$dictionary["SM_Products"]["fields"]["sm_products_sm_salesliterature"] = array (
  'name' => 'sm_products_sm_salesliterature',
  'type' => 'link',
  'relationship' => 'sm_products_sm_salesliterature',
  'source' => 'non-db',
);


// created: 2009-04-06 10:47:54
$dictionary["SM_Products"]["fields"]["sm_products_sm_solutions"] = array (
  'name' => 'sm_products_sm_solutions',
  'type' => 'link',
  'relationship' => 'sm_products_sm_solutions',
  'source' => 'non-db',
);


// created: 2009-04-06 10:47:54
$dictionary["SM_Products"]["fields"]["sm_products_contacts"] = array (
  'name' => 'sm_products_contacts',
  'type' => 'link',
  'relationship' => 'sm_products_contacts',
  'source' => 'non-db',
);


// created: 2009-04-06 10:47:54
$dictionary["SM_Products"]["fields"]["sm_products_contacts_1"] = array (
  'name' => 'sm_products_contacts_1',
  'type' => 'link',
  'relationship' => 'sm_products_contacts_1',
  'source' => 'non-db',
);


// created: 2009-04-06 10:47:55
$dictionary["SM_Products"]["fields"]["sm_assets_sm_products"] = array (
  'name' => 'sm_assets_sm_products',
  'type' => 'link',
  'relationship' => 'sm_assets_sm_products',
  'source' => 'non-db',
);


// created: 2009-04-06 10:47:56
$dictionary["SM_Products"]["fields"]["sm_vendors_sm_products"] = array (
  'name' => 'sm_vendors_sm_products',
  'type' => 'link',
  'relationship' => 'sm_vendors_sm_products',
  'source' => 'non-db',
  'side' => 'right',
);


// created: 2009-04-06 10:47:56
$dictionary["SM_Products"]["fields"]["sm_vendors_sm_products_name"] = array (
  'name' => 'sm_vendors_sm_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SM_VENDORS_SM_PRODUCTS_FROM_SM_VENDORS_TITLE',
  'save' => true,
  'id_name' => 'sm_vendors2db0vendors_ida',
  'link' => 'sm_vendors_sm_products',
  'table' => 'sm_vendors',
  'module' => 'SM_Vendors',
  'rname' => 'name',
);


// created: 2009-04-06 10:47:56
$dictionary["SM_Products"]["fields"]["sm_vendors2db0vendors_ida"] = array (
  'name' => 'sm_vendors2db0vendors_ida',
  'type' => 'link',
  'relationship' => 'sm_vendors_sm_products',
  'source' => 'non-db',
  'side' => 'right',
);


// created: 2009-04-07 15:18:37
$dictionary["SM_Products"]["fields"]["sm_products_sm_quotedetails"] = array (
  'name' => 'sm_products_sm_quotedetails',
  'type' => 'link',
  'relationship' => 'sm_products_sm_quotedetails',
  'source' => 'non-db',
);


// created: 2009-04-07 15:18:37
$dictionary["SM_Products"]["fields"]["sm_products_sm_chargecodes"] = array (
  'name' => 'sm_products_sm_chargecodes',
  'type' => 'link',
  'relationship' => 'sm_products_sm_chargecodes',
  'source' => 'non-db',
);


// created: 2009-04-07 15:18:37
$dictionary["SM_Products"]["fields"]["sm_products_sm_physinventory"] = array (
  'name' => 'sm_products_sm_physinventory',
  'type' => 'link',
  'relationship' => 'sm_products_sm_physinventory',
  'source' => 'non-db',
);


// created: 2009-04-07 15:18:37
$dictionary["SM_Products"]["fields"]["sm_products_sm_assets"] = array (
  'name' => 'sm_products_sm_assets',
  'type' => 'link',
  'relationship' => 'sm_products_sm_assets',
  'source' => 'non-db',
);


// created: 2009-04-07 15:18:37
$dictionary["SM_Products"]["fields"]["sm_products_sm_salesliterature"] = array (
  'name' => 'sm_products_sm_salesliterature',
  'type' => 'link',
  'relationship' => 'sm_products_sm_salesliterature',
  'source' => 'non-db',
);


// created: 2009-04-07 15:18:37
$dictionary["SM_Products"]["fields"]["sm_products_sm_solutions"] = array (
  'name' => 'sm_products_sm_solutions',
  'type' => 'link',
  'relationship' => 'sm_products_sm_solutions',
  'source' => 'non-db',
);


// created: 2009-04-07 15:18:37
$dictionary["SM_Products"]["fields"]["sm_products_contacts"] = array (
  'name' => 'sm_products_contacts',
  'type' => 'link',
  'relationship' => 'sm_products_contacts',
  'source' => 'non-db',
);


// created: 2009-04-07 15:18:37
$dictionary["SM_Products"]["fields"]["sm_products_contacts_1"] = array (
  'name' => 'sm_products_contacts_1',
  'type' => 'link',
  'relationship' => 'sm_products_contacts_1',
  'source' => 'non-db',
);


// created: 2009-04-07 15:18:37
$dictionary["SM_Products"]["fields"]["sm_products_documents"] = array (
  'name' => 'sm_products_documents',
  'type' => 'link',
  'relationship' => 'sm_products_documents',
  'source' => 'non-db',
);


// created: 2009-04-07 15:18:38
$dictionary["SM_Products"]["fields"]["sm_assets_sm_products"] = array (
  'name' => 'sm_assets_sm_products',
  'type' => 'link',
  'relationship' => 'sm_assets_sm_products',
  'source' => 'non-db',
);


// created: 2009-04-07 15:18:38
$dictionary["SM_Products"]["fields"]["sm_vendors_sm_products"] = array (
  'name' => 'sm_vendors_sm_products',
  'type' => 'link',
  'relationship' => 'sm_vendors_sm_products',
  'source' => 'non-db',
  'side' => 'right',
);


// created: 2009-04-07 15:18:38
$dictionary["SM_Products"]["fields"]["sm_vendors_sm_products_name"] = array (
  'name' => 'sm_vendors_sm_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SM_VENDORS_SM_PRODUCTS_FROM_SM_VENDORS_TITLE',
  'save' => true,
  'id_name' => 'sm_vendors2db0vendors_ida',
  'link' => 'sm_vendors_sm_products',
  'table' => 'sm_vendors',
  'module' => 'SM_Vendors',
  'rname' => 'name',
);


// created: 2009-04-07 15:18:38
$dictionary["SM_Products"]["fields"]["sm_vendors2db0vendors_ida"] = array (
  'name' => 'sm_vendors2db0vendors_ida',
  'type' => 'link',
  'relationship' => 'sm_vendors_sm_products',
  'source' => 'non-db',
  'side' => 'right',
);


// created: 2009-04-08 10:08:07
$dictionary["SM_Products"]["fields"]["sm_products_sm_quotedetails"] = array (
  'name' => 'sm_products_sm_quotedetails',
  'type' => 'link',
  'relationship' => 'sm_products_sm_quotedetails',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:07
$dictionary["SM_Products"]["fields"]["sm_products_sm_chargecodes"] = array (
  'name' => 'sm_products_sm_chargecodes',
  'type' => 'link',
  'relationship' => 'sm_products_sm_chargecodes',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:07
$dictionary["SM_Products"]["fields"]["sm_products_sm_physinventory"] = array (
  'name' => 'sm_products_sm_physinventory',
  'type' => 'link',
  'relationship' => 'sm_products_sm_physinventory',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:07
$dictionary["SM_Products"]["fields"]["sm_products_sm_assets"] = array (
  'name' => 'sm_products_sm_assets',
  'type' => 'link',
  'relationship' => 'sm_products_sm_assets',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:07
$dictionary["SM_Products"]["fields"]["sm_products_sm_salesliterature"] = array (
  'name' => 'sm_products_sm_salesliterature',
  'type' => 'link',
  'relationship' => 'sm_products_sm_salesliterature',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:07
$dictionary["SM_Products"]["fields"]["sm_products_sm_solutions"] = array (
  'name' => 'sm_products_sm_solutions',
  'type' => 'link',
  'relationship' => 'sm_products_sm_solutions',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:07
$dictionary["SM_Products"]["fields"]["sm_products_contacts"] = array (
  'name' => 'sm_products_contacts',
  'type' => 'link',
  'relationship' => 'sm_products_contacts',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:07
$dictionary["SM_Products"]["fields"]["sm_products_contacts_1"] = array (
  'name' => 'sm_products_contacts_1',
  'type' => 'link',
  'relationship' => 'sm_products_contacts_1',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:07
$dictionary["SM_Products"]["fields"]["sm_products_documents"] = array (
  'name' => 'sm_products_documents',
  'type' => 'link',
  'relationship' => 'sm_products_documents',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:08
$dictionary["SM_Products"]["fields"]["sm_assets_sm_products"] = array (
  'name' => 'sm_assets_sm_products',
  'type' => 'link',
  'relationship' => 'sm_assets_sm_products',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:43
$dictionary["SM_Products"]["fields"]["sm_products_sm_quotedetails"] = array (
  'name' => 'sm_products_sm_quotedetails',
  'type' => 'link',
  'relationship' => 'sm_products_sm_quotedetails',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:43
$dictionary["SM_Products"]["fields"]["sm_products_sm_chargecodes"] = array (
  'name' => 'sm_products_sm_chargecodes',
  'type' => 'link',
  'relationship' => 'sm_products_sm_chargecodes',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:43
$dictionary["SM_Products"]["fields"]["sm_products_sm_physinventory"] = array (
  'name' => 'sm_products_sm_physinventory',
  'type' => 'link',
  'relationship' => 'sm_products_sm_physinventory',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:44
$dictionary["SM_Products"]["fields"]["sm_products_sm_assets"] = array (
  'name' => 'sm_products_sm_assets',
  'type' => 'link',
  'relationship' => 'sm_products_sm_assets',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:44
$dictionary["SM_Products"]["fields"]["sm_products_sm_salesliterature"] = array (
  'name' => 'sm_products_sm_salesliterature',
  'type' => 'link',
  'relationship' => 'sm_products_sm_salesliterature',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:44
$dictionary["SM_Products"]["fields"]["sm_products_sm_solutions"] = array (
  'name' => 'sm_products_sm_solutions',
  'type' => 'link',
  'relationship' => 'sm_products_sm_solutions',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:44
$dictionary["SM_Products"]["fields"]["sm_products_contacts"] = array (
  'name' => 'sm_products_contacts',
  'type' => 'link',
  'relationship' => 'sm_products_contacts',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:44
$dictionary["SM_Products"]["fields"]["sm_products_contacts_1"] = array (
  'name' => 'sm_products_contacts_1',
  'type' => 'link',
  'relationship' => 'sm_products_contacts_1',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:44
$dictionary["SM_Products"]["fields"]["sm_products_documents"] = array (
  'name' => 'sm_products_documents',
  'type' => 'link',
  'relationship' => 'sm_products_documents',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:44
$dictionary["SM_Products"]["fields"]["sm_assets_sm_products"] = array (
  'name' => 'sm_assets_sm_products',
  'type' => 'link',
  'relationship' => 'sm_assets_sm_products',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:50
$dictionary["SM_Products"]["fields"]["sm_products_sm_quotedetails"] = array (
  'name' => 'sm_products_sm_quotedetails',
  'type' => 'link',
  'relationship' => 'sm_products_sm_quotedetails',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:50
$dictionary["SM_Products"]["fields"]["sm_products_sm_chargecodes"] = array (
  'name' => 'sm_products_sm_chargecodes',
  'type' => 'link',
  'relationship' => 'sm_products_sm_chargecodes',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:50
$dictionary["SM_Products"]["fields"]["sm_products_sm_physinventory"] = array (
  'name' => 'sm_products_sm_physinventory',
  'type' => 'link',
  'relationship' => 'sm_products_sm_physinventory',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:50
$dictionary["SM_Products"]["fields"]["sm_products_sm_assets"] = array (
  'name' => 'sm_products_sm_assets',
  'type' => 'link',
  'relationship' => 'sm_products_sm_assets',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:50
$dictionary["SM_Products"]["fields"]["sm_products_sm_salesliterature"] = array (
  'name' => 'sm_products_sm_salesliterature',
  'type' => 'link',
  'relationship' => 'sm_products_sm_salesliterature',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:50
$dictionary["SM_Products"]["fields"]["sm_products_sm_solutions"] = array (
  'name' => 'sm_products_sm_solutions',
  'type' => 'link',
  'relationship' => 'sm_products_sm_solutions',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:50
$dictionary["SM_Products"]["fields"]["sm_products_contacts"] = array (
  'name' => 'sm_products_contacts',
  'type' => 'link',
  'relationship' => 'sm_products_contacts',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:50
$dictionary["SM_Products"]["fields"]["sm_products_contacts_1"] = array (
  'name' => 'sm_products_contacts_1',
  'type' => 'link',
  'relationship' => 'sm_products_contacts_1',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:50
$dictionary["SM_Products"]["fields"]["sm_products_documents"] = array (
  'name' => 'sm_products_documents',
  'type' => 'link',
  'relationship' => 'sm_products_documents',
  'source' => 'non-db',
);


// created: 2009-04-08 10:08:51
$dictionary["SM_Products"]["fields"]["sm_assets_sm_products"] = array (
  'name' => 'sm_assets_sm_products',
  'type' => 'link',
  'relationship' => 'sm_assets_sm_products',
  'source' => 'non-db',
);


// created: 2009-04-09 14:26:29
$dictionary["SM_Products"]["fields"]["sm_products_sm_quotedetails"] = array (
  'name' => 'sm_products_sm_quotedetails',
  'type' => 'link',
  'relationship' => 'sm_products_sm_quotedetails',
  'source' => 'non-db',
);


// created: 2009-04-09 14:26:29
$dictionary["SM_Products"]["fields"]["sm_products_sm_chargecodes"] = array (
  'name' => 'sm_products_sm_chargecodes',
  'type' => 'link',
  'relationship' => 'sm_products_sm_chargecodes',
  'source' => 'non-db',
);


// created: 2009-04-09 14:26:30
$dictionary["SM_Products"]["fields"]["sm_products_sm_physinventory"] = array (
  'name' => 'sm_products_sm_physinventory',
  'type' => 'link',
  'relationship' => 'sm_products_sm_physinventory',
  'source' => 'non-db',
);


// created: 2009-04-09 14:26:30
$dictionary["SM_Products"]["fields"]["sm_products_sm_assets"] = array (
  'name' => 'sm_products_sm_assets',
  'type' => 'link',
  'relationship' => 'sm_products_sm_assets',
  'source' => 'non-db',
);


// created: 2009-04-09 14:26:30
$dictionary["SM_Products"]["fields"]["sm_products_sm_salesliterature"] = array (
  'name' => 'sm_products_sm_salesliterature',
  'type' => 'link',
  'relationship' => 'sm_products_sm_salesliterature',
  'source' => 'non-db',
);


// created: 2009-04-09 14:26:30
$dictionary["SM_Products"]["fields"]["sm_products_sm_solutions"] = array (
  'name' => 'sm_products_sm_solutions',
  'type' => 'link',
  'relationship' => 'sm_products_sm_solutions',
  'source' => 'non-db',
);


// created: 2009-04-09 14:26:30
$dictionary["SM_Products"]["fields"]["sm_products_contacts"] = array (
  'name' => 'sm_products_contacts',
  'type' => 'link',
  'relationship' => 'sm_products_contacts',
  'source' => 'non-db',
);


// created: 2009-04-09 14:26:30
$dictionary["SM_Products"]["fields"]["sm_products_contacts_1"] = array (
  'name' => 'sm_products_contacts_1',
  'type' => 'link',
  'relationship' => 'sm_products_contacts_1',
  'source' => 'non-db',
);


// created: 2009-04-09 14:26:30
$dictionary["SM_Products"]["fields"]["sm_products_documents"] = array (
  'name' => 'sm_products_documents',
  'type' => 'link',
  'relationship' => 'sm_products_documents',
  'source' => 'non-db',
);


// created: 2009-04-09 14:26:30
$dictionary["SM_Products"]["fields"]["sm_assets_sm_products"] = array (
  'name' => 'sm_assets_sm_products',
  'type' => 'link',
  'relationship' => 'sm_assets_sm_products',
  'source' => 'non-db',
);


// created: 2009-04-09 14:57:09
$dictionary["SM_Products"]["fields"]["sm_products_sm_quotedetails"] = array (
  'name' => 'sm_products_sm_quotedetails',
  'type' => 'link',
  'relationship' => 'sm_products_sm_quotedetails',
  'source' => 'non-db',
);


// created: 2009-04-09 14:57:09
$dictionary["SM_Products"]["fields"]["sm_products_sm_chargecodes"] = array (
  'name' => 'sm_products_sm_chargecodes',
  'type' => 'link',
  'relationship' => 'sm_products_sm_chargecodes',
  'source' => 'non-db',
);


// created: 2009-04-09 14:57:10
$dictionary["SM_Products"]["fields"]["sm_products_sm_physinventory"] = array (
  'name' => 'sm_products_sm_physinventory',
  'type' => 'link',
  'relationship' => 'sm_products_sm_physinventory',
  'source' => 'non-db',
);


// created: 2009-04-09 14:57:10
$dictionary["SM_Products"]["fields"]["sm_products_sm_assets"] = array (
  'name' => 'sm_products_sm_assets',
  'type' => 'link',
  'relationship' => 'sm_products_sm_assets',
  'source' => 'non-db',
);


// created: 2009-04-09 14:57:10
$dictionary["SM_Products"]["fields"]["sm_products_sm_salesliterature"] = array (
  'name' => 'sm_products_sm_salesliterature',
  'type' => 'link',
  'relationship' => 'sm_products_sm_salesliterature',
  'source' => 'non-db',
);


// created: 2009-04-09 14:57:10
$dictionary["SM_Products"]["fields"]["sm_products_sm_solutions"] = array (
  'name' => 'sm_products_sm_solutions',
  'type' => 'link',
  'relationship' => 'sm_products_sm_solutions',
  'source' => 'non-db',
);


// created: 2009-04-09 14:57:10
$dictionary["SM_Products"]["fields"]["sm_products_contacts"] = array (
  'name' => 'sm_products_contacts',
  'type' => 'link',
  'relationship' => 'sm_products_contacts',
  'source' => 'non-db',
);


// created: 2009-04-09 14:57:10
$dictionary["SM_Products"]["fields"]["sm_products_contacts_1"] = array (
  'name' => 'sm_products_contacts_1',
  'type' => 'link',
  'relationship' => 'sm_products_contacts_1',
  'source' => 'non-db',
);


// created: 2009-04-09 14:57:10
$dictionary["SM_Products"]["fields"]["sm_products_documents"] = array (
  'name' => 'sm_products_documents',
  'type' => 'link',
  'relationship' => 'sm_products_documents',
  'source' => 'non-db',
);


// created: 2009-04-09 14:57:10
$dictionary["SM_Products"]["fields"]["sm_assets_sm_products"] = array (
  'name' => 'sm_assets_sm_products',
  'type' => 'link',
  'relationship' => 'sm_assets_sm_products',
  'source' => 'non-db',
);



 // created: 2011-11-30 20:08:35

 

 // created: 2012-05-11 20:31:53
$dictionary['SM_Products']['fields']['currentcost']['reportable']=true;
$dictionary['SM_Products']['fields']['currentcost']['enable_range_search']=false;

 

// created: 2011-11-30 19:51:29
$dictionary["SM_Products"]["fields"]["cases_sm_products"] = array (
  'name' => 'cases_sm_products',
  'type' => 'link',
  'relationship' => 'cases_sm_products',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_SM_PRODUCTS_FROM_CASES_TITLE',
);

?>
<?php
// created: 2014-02-28 05:35:43
$dictionary["Contact"]["fields"]["kr_supplier_contacts_1"] = array (
  'name' => 'kr_supplier_contacts_1',
  'type' => 'link',
  'relationship' => 'kr_supplier_contacts_1',
  'source' => 'non-db',
  'vname' => 'LBL_KR_SUPPLIER_CONTACTS_1_FROM_KR_SUPPLIER_TITLE',
  'id_name' => 'kr_supplier_contacts_1kr_supplier_ida',
);
$dictionary["Contact"]["fields"]["kr_supplier_contacts_1_name"] = array (
  'name' => 'kr_supplier_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_KR_SUPPLIER_CONTACTS_1_FROM_KR_SUPPLIER_TITLE',
  'save' => true,
  'id_name' => 'kr_supplier_contacts_1kr_supplier_ida',
  'link' => 'kr_supplier_contacts_1',
  'table' => 'kr_supplier',
  'module' => 'kr_supplier',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["kr_supplier_contacts_1kr_supplier_ida"] = array (
  'name' => 'kr_supplier_contacts_1kr_supplier_ida',
  'type' => 'link',
  'relationship' => 'kr_supplier_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_KR_SUPPLIER_CONTACTS_1_FROM_CONTACTS_TITLE',
);

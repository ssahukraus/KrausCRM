<?php
// created: 2014-02-25 09:25:25
$dictionary["Document"]["fields"]["kr_supplier_documents_1"] = array (
  'name' => 'kr_supplier_documents_1',
  'type' => 'link',
  'relationship' => 'kr_supplier_documents_1',
  'source' => 'non-db',
  'vname' => 'LBL_KR_SUPPLIER_DOCUMENTS_1_FROM_KR_SUPPLIER_TITLE',
  'id_name' => 'kr_supplier_documents_1kr_supplier_ida',
);
$dictionary["Document"]["fields"]["kr_supplier_documents_1_name"] = array (
  'name' => 'kr_supplier_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_KR_SUPPLIER_DOCUMENTS_1_FROM_KR_SUPPLIER_TITLE',
  'save' => true,
  'id_name' => 'kr_supplier_documents_1kr_supplier_ida',
  'link' => 'kr_supplier_documents_1',
  'table' => 'kr_supplier',
  'module' => 'kr_supplier',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["kr_supplier_documents_1kr_supplier_ida"] = array (
  'name' => 'kr_supplier_documents_1kr_supplier_ida',
  'type' => 'link',
  'relationship' => 'kr_supplier_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_KR_SUPPLIER_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);

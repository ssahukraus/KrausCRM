<?php
// created: 2014-02-25 09:21:05
$dictionary["Contact"]["fields"]["kr_service_providers_contacts_1"] = array (
  'name' => 'kr_service_providers_contacts_1',
  'type' => 'link',
  'relationship' => 'kr_service_providers_contacts_1',
  'source' => 'non-db',
  'vname' => 'LBL_KR_SERVICE_PROVIDERS_CONTACTS_1_FROM_KR_SERVICE_PROVIDERS_TITLE',
  'id_name' => 'kr_service_providers_contacts_1kr_service_providers_ida',
);
$dictionary["Contact"]["fields"]["kr_service_providers_contacts_1_name"] = array (
  'name' => 'kr_service_providers_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_KR_SERVICE_PROVIDERS_CONTACTS_1_FROM_KR_SERVICE_PROVIDERS_TITLE',
  'save' => true,
  'id_name' => 'kr_service_providers_contacts_1kr_service_providers_ida',
  'link' => 'kr_service_providers_contacts_1',
  'table' => 'kr_service_providers',
  'module' => 'kr_service_providers',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["kr_service_providers_contacts_1kr_service_providers_ida"] = array (
  'name' => 'kr_service_providers_contacts_1kr_service_providers_ida',
  'type' => 'link',
  'relationship' => 'kr_service_providers_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_KR_SERVICE_PROVIDERS_CONTACTS_1_FROM_CONTACTS_TITLE',
);

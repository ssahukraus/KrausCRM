<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2014-02-21 11:09:36

$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_kr_violation_1'] = array (
  'order' => 100,
  'module' => 'kr_Violation',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_KR_DEALERS_KR_VIOLATION_1_FROM_KR_VIOLATION_TITLE',
  'get_subpanel_data' => 'kr_dealers_kr_violation_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2014-03-27 08:17:33
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_kr_dealers_1kr_dealers_ida'] = array (
  'order' => 100,
  'module' => 'kr_Dealers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_KR_DEALERS_KR_DEALERS_1_FROM_KR_DEALERS_R_TITLE',
  'get_subpanel_data' => 'kr_dealers_kr_dealers_1kr_dealers_ida',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2014-02-12 10:31:27
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_documents_1'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_KR_DEALERS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'kr_dealers_documents_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2014-02-13 05:31:34
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_project_1'] = array (
  'order' => 100,
  'module' => 'Project',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_KR_DEALERS_PROJECT_1_FROM_PROJECT_TITLE',
  'get_subpanel_data' => 'kr_dealers_project_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2014-02-12 04:40:18
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_kr_website_1'] = array (
  'order' => 100,
  'module' => 'kr_website',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_KR_DEALERS_KR_WEBSITE_1_FROM_KR_WEBSITE_TITLE',
  'get_subpanel_data' => 'kr_dealers_kr_website_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2014-02-12 04:41:56
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_KR_DEALERS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'kr_dealers_contacts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2014-02-11 13:11:50
$layout_defs["kr_Dealers"]["subpanel_setup"]['activities'] = array (
  'order' => 10,
  'sort_order' => 'desc',
  'sort_by' => 'date_start',
  'title_key' => 'LBL_ACTIVITIES_SUBPANEL_TITLE',
  'type' => 'collection',
  'subpanel_name' => 'activities',
  'module' => 'Activities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateTaskButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopScheduleMeetingButton',
    ),
    2 => 
    array (
      'widget_class' => 'SubPanelTopScheduleCallButton',
    ),
    3 => 
    array (
      'widget_class' => 'SubPanelTopComposeEmailButton',
    ),
  ),
  'collection_list' => 
  array (
    'meetings' => 
    array (
      'module' => 'Meetings',
      'subpanel_name' => 'ForActivities',
      'get_subpanel_data' => 'kr_dealers_activities_1_meetings',
    ),
    'tasks' => 
    array (
      'module' => 'Tasks',
      'subpanel_name' => 'ForActivities',
      'get_subpanel_data' => 'kr_dealers_activities_1_tasks',
    ),
    'calls' => 
    array (
      'module' => 'Calls',
      'subpanel_name' => 'ForActivities',
      'get_subpanel_data' => 'kr_dealers_activities_1_calls',
    ),
  ),
  'get_subpanel_data' => 'activities',
);
$layout_defs["kr_Dealers"]["subpanel_setup"]['history'] = array (
  'order' => 20,
  'sort_order' => 'desc',
  'sort_by' => 'date_modified',
  'title_key' => 'LBL_HISTORY',
  'type' => 'collection',
  'subpanel_name' => 'history',
  'module' => 'History',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateNoteButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopArchiveEmailButton',
    ),
    2 => 
    array (
      'widget_class' => 'SubPanelTopSummaryButton',
    ),
  ),
  'collection_list' => 
  array (
    'meetings' => 
    array (
      'module' => 'Meetings',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'kr_dealers_activities_1_meetings',
    ),
    'tasks' => 
    array (
      'module' => 'Tasks',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'kr_dealers_activities_1_tasks',
    ),
    'calls' => 
    array (
      'module' => 'Calls',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'kr_dealers_activities_1_calls',
    ),
    'notes' => 
    array (
      'module' => 'Notes',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'kr_dealers_activities_1_notes',
    ),
    'emails' => 
    array (
      'module' => 'Emails',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'kr_dealers_activities_1_emails',
    ),
  ),
  'get_subpanel_data' => 'history',
);


 // created: 2014-02-12 06:01:21
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_cases_1'] = array (
  'order' => 100,
  'module' => 'Cases',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_KR_DEALERS_CASES_1_FROM_CASES_TITLE',
  'get_subpanel_data' => 'kr_dealers_cases_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


/*from a new file*/
/*to arrange the subpanels in order*/
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_contacts_1']['order']=1;
$layout_defs["kr_Dealers"]["subpanel_setup"]['activities']['order'] = 2;
$layout_defs["kr_Dealers"]["subpanel_setup"]['history']['order'] = 3;
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_cases_1'] ['order'] =4; 
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_documents_1']['order'] = 5;
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_project_1']['order'] = 6;
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_kr_violation_1']['order'] = 7;
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_kr_website_1']['order'] =8;



$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_kr_violation_1']["top_buttons"] = array(
    0 =>
    array('widget_class' => 'SubPanelTopSendEmailButton_kr'
    ),
    1 =>
    array('widget_class' => 'SubPanelTopSelectAllViolationButton_kr')
);

/*to arrange the subpanels in order*/
/*$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_contacts_1']['order']=1;
$layout_defs["kr_Dealers"]["subpanel_setup"]['activities']['order'] = 2;
$layout_defs["kr_Dealers"]["subpanel_setup"]['history']['order'] = 3;
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_cases_1'] ['order'] =4; 
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_documents_1']['order'] = 5;
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_project_1']['order'] = 6;
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_kr_violation_1']['order'] = 7;
$layout_defs["kr_Dealers"]["subpanel_setup"]['kr_dealers_kr_website_1']['order'] =8;
*/

//auto-generated file DO NOT EDIT
$layout_defs['kr_Dealers']['subpanel_setup']['kr_dealers_notes_1']['override_subpanel_name'] = 'kr_Dealers_subpanel_kr_dealers_notes_1';


//auto-generated file DO NOT EDIT
$layout_defs['kr_Dealers']['subpanel_setup']['kr_dealers_documents_1']['override_subpanel_name'] = 'kr_Dealers_subpanel_kr_dealers_documents_1';


//auto-generated file DO NOT EDIT
$layout_defs['kr_Dealers']['subpanel_setup']['kr_dealers_cases_1']['override_subpanel_name'] = 'kr_Dealers_subpanel_kr_dealers_cases_1';


//auto-generated file DO NOT EDIT
$layout_defs['kr_Dealers']['subpanel_setup']['kr_dealers_kr_violation_1']['override_subpanel_name'] = 'kr_Dealers_subpanel_kr_dealers_kr_violation_1';


//auto-generated file DO NOT EDIT
$layout_defs['kr_Dealers']['subpanel_setup']['kr_dealers_kr_website_1']['override_subpanel_name'] = 'kr_Dealers_subpanel_kr_dealers_kr_website_1';


//auto-generated file DO NOT EDIT
$layout_defs['kr_Dealers']['subpanel_setup']['kr_dealers_contacts_1']['override_subpanel_name'] = 'kr_Dealers_subpanel_kr_dealers_contacts_1';

?>
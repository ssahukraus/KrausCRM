<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point sd');

require_once('include/MVC/View/views/view.list.php');

class kr_DealersViewList extends ViewList {

    public function display() {
       
		if (!empty($_REQUEST['searchFormTab'])) { //check for a partner's search, if none proceed 
            $_REQUEST['searchFormTab'] = 'basic_search'; //set the search flag 
            $_REQUEST['query'] = true;
           // $_REQUEST['current_user_only_basic'] = 1; //flag the check box 
            $_REQUEST['partner_level_c_basic'] = "0"; //flag the partner '0' as partner level(parent) field to NO 
        }
         if (empty($_REQUEST['searchFormTab'])) { //check for a user's search, if none proceed 
            $_REQUEST['searchFormTab'] = 'basic_search'; //set the search flag 
            $_REQUEST['query'] = true;
           // $_REQUEST['current_user_only_basic'] = 1; //flag the 'my items' check box 
            $_REQUEST['partner_level_c_basic'] = "0"; //flag the partner '0' as partner level(parent) field to NO 
        }
        parent::display(); //continue running the extended function's code 
    }

}

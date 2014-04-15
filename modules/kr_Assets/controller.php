<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 *and open the template in the editor.
 * Suraj
 */

class kr_AssetsController extends SugarController {

    public function action_ajaxFun() {
        $dealerId = $_POST['dealerId'];
        $mailData = $_POST['mailIds'];
        /* to get the primary mail id for any dealer */
        $partner = BeanFactory::getBean('kr_Dealers', $dealerId);
        $contact = $partner->get_linked_beans('kr_dealers_contacts_1', 'Contacts');
        $sendtoId = array();
        foreach ($contact as $key => $val) {
            $emailIds = ($val->emailAddress->addresses);
            foreach ($emailIds as $eAddress) {
                if ($eAddress != "") {
                    $sendtoId[] = strtolower($eAddress['email_address']);
                }
            }
        }
        /* primary mail id ends */
        $flag = 1;

        /* to check mail id provided is present in db or not */
        foreach ($mailData as $mid) {
            $mid = trim($mid);
            if ($mid != "") {
                if (!in_array(strtolower(trim($mid)), $sendtoId)) {
                    $flag = 0;
                }
            }
        }

        $role = $this->action_getUserDetail();
        /* check ends here */
        $c = json_encode(array("flag" => $flag, "role" => $role));
        echo $c;
        exit();
    }

	/*Function to check the user role for sending mail*/
    public function action_getUserDetail() {
        global $current_user;
        global $sugar_config;
        $roleFlag = 0;
        if ($current_user->is_admin == 1) {
            $roleFlag = 1;
        }
        $roleConfig = $sugar_config['kr_role_for_email'];
        $acl = new ACLRole();
        $role = $acl->getUserRoles($current_user->id);

        if (!empty($role)) {
            for ($i = 0; $i < count($role); $i++) {
                $role[$i] = strtoupper($role[$i]);
            }
            $roleFlag = 0;
            foreach ($roleConfig as $rl) {
                if (in_array(strtoupper($rl), $role)) {
                    $roleFlag = 1;
                }
            }
        }
        return $roleFlag;
    }

}

?>

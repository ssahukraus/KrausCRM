<?php
$job_strings[] = 'exportconfirm';


/**
 * @return boolean
 */
function exportconfirm() {
	$username = $GLOBALS['db']->connectOptions['db_user_name'];
	$password = $GLOBALS['db']->connectOptions['db_password'];
	$hostname = $GLOBALS['db']->connectOptions['db_host_name'];
	$database=	'vendor_portal';
	
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	$selected = mysql_select_db($database,$dbhandle) or die("Could not select database ".$dbhandle);
	
	$cc = new SM_SalesOrder();
	$r = $cc->db->query("SELECT so.id, so.name,cs.cases_sm_salesorder_1cases_ida as `case_id` from sm_salesorder so INNER JOIN sm_salesorder_cstm ocs on ocs.id_c=so.id INNER JOIN cases_sm_salesorder_1_c cs ON cs.cases_sm_salesorder_1sm_salesorder_idb=  so.id WHERE ocs.status_c='exported_not_in_erp' AND so.deleted=0" );
	while($a = $cc->db->fetchByAssoc($r)) {
		
		$res = mysql_query("SELECT order_no FROM order_tracking_info  WHERE customer_po='".$a['name']."' AND ( order_no LIKE 'SOPR%'  OR order_no LIKE 'SW%'  ) AND DATEDIFF(NOW(), order_date) <= 7 " ,$dbhandle);
		if(mysql_num_rows($res)>0) {

			$order_obj = new SM_SalesOrder();
			$order_obj->retrieve($a['id']);
			$order_obj->status_c='exported_in_erp';			 
			$order_obj->save();
			
			while($row=mysql_fetch_assoc($res)) {
				$po_number=$row['order_no'];				
			}
			 
			$c = new aCase();	
			$c->retrieve($a['case_id']);
			$c->ponumber_c=$po_number;
			$c->status='WaitingTracking';
			$c->save();						 
		}		 
		mysql_free_result($res);
	}
	mysql_close($dbhandle);
	return true;
}

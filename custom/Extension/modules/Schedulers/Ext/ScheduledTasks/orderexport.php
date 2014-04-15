<?php
/**
 * This array provides the Schedulers admin interface with values for its "Job"
 * dropdown menu.
 */
$job_strings[] = 'orderexport';

 
function orderexport() {

   $orders= new SM_SalesOrder();
 
   $sql="SELECT so.id as order_id, so.`name` as customer_po, ocs.type_c as type,  ac.`name` as `name`, ";
   $sql.=" ocs.shipping_method_c as shipping_method,  ocs.shipping_carrier_c as shipping_carrier,  ";
   $sql.=" ac.shipping_address_street  as street, ac.shipping_address_city as city, ";
   $sql.=" ac.shipping_address_state as state,  ac.shipping_address_postalcode as zip_code, ";
   $sql.=" accs.country_code_c as country, ac.phone_office as phone from sm_salesorder so INNER JOIN sm_salesorder_cstm ocs on ocs.id_c=so.id INNER JOIN accounts ac on ac.id=account_id_c INNER JOIN accounts_cstm accs ON accs.id_c=ac.id WHERE ocs.status_c='approved' AND so.deleted=0";
   $r = $orders->db->query($sql);   
   $order_row="";
   
   while($order = $orders->db->fetchByAssoc($r)) {
   	   	 
   		$date=date('Ymd');
   		$street = str_replace("\r\n",'', $order['street']);
   		$country=$order['country'];
   		
   		if ( $order['type'] && $order['customer_po'] && $order['name'] && $order['city'] && $order['state'] && $country && $order['zip_code'] && $order['phone'] && $order['shipping_method'] && $order['shipping_carrier'] &&( ($order['shipping_carrier']=="UPS" && $order['shipping_method']!="PML") || ($order['shipping_carrier']=="USPS" && $order['shipping_method']=="PML" ) ) ) {
   		
   		$order['customer_po']=trim($order['customer_po']);
   		//harcoded carrier
   		if ($order['shipping_method']=="PML") {
   			$order['shipping_carrier']="USPS";
   		} else {
   			$order['shipping_carrier']="UPS";
   		}
   		
   		$order_row.="H|KRAU1|".$order['type']."||".$order['customer_po']."|".$date."|KRAUS001|USD|KRAUS001|SHP|20160104|".$order['name']."|".$order['name']."|";
   		$order_row.=$street."|||".$order['city']."|".$order['state']."|".$order['zip_code']."|".$country."|KRAU1|".$order['shipping_carrier']."|".$order['shipping_method']."||".$order['phone']."|||\r\n";
			
   		$order_row=htmlspecialchars_decode($order_row);
   		
   		$order_id=$order['order_id'];
   		   		 
   		$products_sql=" SELECT qc.product_qty_c as qty, p.id as sku, p.erpproductid as erp_id FROM sm_salesorder_sm_quotes_1_c q INNER JOIN sm_quotes_cstm qc on qc.id_c=q.sm_salesorder_sm_quotes_1sm_quotes_idb INNER JOIN sm_products p on p.id=qc.sm_products_id_c WHERE q.deleted=0 AND sm_salesorder_sm_quotes_1sm_salesorder_ida='".$order_id."' ";
   		$products=new SM_Products();
   		$res=$products->db->query($products_sql);     		 
   		$i=1;
   		while($product = $orders->db->fetchByAssoc($res)) {
   			$order_row.="D|".$product['erp_id']."|".$product['sku']."|EA|".$product['qty']."|0.00|".$i."|\r\n"; 
   			$i++;
   		}   		   	 
   		   		 
   		$order_obj = new SM_SalesOrder();
   		$order_obj->retrieve($order_id);   
   		$order_obj->status_c='exported_not_in_erp';
   		$order_obj->save();
   		}
   }
   if (!empty($order_row)) {
   $filename="edi_export/850_".date('mdY')."_".date('His').".txt";    
   $file = fopen($filename, 'w+') or die('Could not open file.');
   fwrite($file, $order_row) or die('Could not write to file.');
   fclose($file);
   $filename="edi_export/backup/850_".date('mdY')."_".date('His').".txt";
   $file = fopen($filename, 'w+') or die('Could not open file.');
   fwrite($file, $order_row) or die('Could not write to file.');
   fclose($file);
   }
   
  return true;
}

 


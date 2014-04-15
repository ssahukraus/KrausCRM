<?php
// require_once('include/MVC/Controller/SugarController.php');
if (! defined ( 'sugarEntry' ) || ! sugarEntry)
	die ( 'Not A Valid Entry Point' );
require_once ('custom/include/pdf/html2pdf.class.php');
// Including all required classes
require_once('custom/include/barcode/class/BCGFontFile.php');
require_once('custom/include/barcode/class/BCGColor.php');
require_once('custom/include/barcode/class/BCGDrawing.php');
// Including the barcode technology
require_once('custom/include/barcode/class/BCGcode39.barcode.php');
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to customerservice@kraususa.com so we can send you a copy immediately.
 *
 * @author Alex Lukyanov
 * @copyright Copyright (c) 2013 Kraus USA. (http://www.kraususa.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 *          Created: Sep 30, 2013
 *         
 */
class kr_RMAController extends SugarController {
	function action_printrma() {
		$rma_id = $_REQUEST ['record'];
		$bean_name = $_REQUEST ['module'];
		$rma = new $bean_name ();
		$rma->retrieve ( $rma_id );
		
		$request_date = $rma->date_entered;
		$order_number = $rma->name;
		$rma_number = $rma->rma_number;
		$customer_name = $rma->account;
		$comments = $rma->description;
		if ($rma_number && !file_exists('barcodes/'.strtolower($rma_number).'.png')) { //barcode
			$font = new BCGFontFile('custom/include/barcode/font/Arial.ttf', 18); 
			$color_black = new BCGColor(0, 0, 0);
			$color_white = new BCGColor(255, 255, 255);
			$drawException = null;
			try {
				$code = new BCGcode39();
				$code->setScale(1); // Resolution
				$code->setThickness(30); // Thickness
				$code->setForegroundColor($color_black); // Color of bars
				$code->setBackgroundColor($color_white); // Color of spaces
				$code->setFont($font); // Font (or 0)
				$code->parse($rma_number); // Text
			} catch(Exception $exception) {
				$drawException = $exception;
			}
			$path='barcodes';
			$file_name=$path."/".strtolower($rma_number).'.png';
			if (!file_exists($path) )  {
				mkdir($path);
				chmod($path, 0777);
			}
							
			$drawing = new BCGDrawing($file_name, $color_white);
			if($drawException) {
				$drawing->drawException($drawException);
			} else {
				$drawing->setBarcode($code);
				$drawing->draw();
			}
			$drawing->finish(BCGDrawing::IMG_FORMAT_PNG);
			chmod($file_name, 0777);
		}
		$account = new Account ();
		$account->retrieve ( $rma->account_id_c );
		$customer_address = $account->shipping_address_street.", ".$account->shipping_address_city.", ".$account->shipping_address_state . ", ".$account->shipping_address_postalcode.", ".$account->country_code_c;
		
		$related_products = $rma->get_linked_beans ( 'kr_rma_sm_quotes', 'SM_Quotes' );
		$dealer = new kr_Dealers();
		$dealer->retrieve( $rma->kr_dealers_id_c );
		$dealer_name = $dealer->name;
		
		ob_start ();
		require_once (dirname ( __FILE__ ) . '/pdf_template/template.php');
		$content = ob_get_clean ();
		try {
			$html2pdf = new HTML2PDF ( 'P', 'Letter', 'en' );
			// $html2pdf->setModeDebug();
			$html2pdf->setDefaultFont ( 'Arial' );
			$html2pdf->writeHTML ( $content, isset ( $_GET ['vuehtml'] ) );
			$html2pdf->Output('rma_'.$order_number.'_'.date("m_d_Y").'.pdf');
		} catch ( HTML2PDF_exception $e ) {
			echo $e;
			exit ();
		}
		exit ();
	}
	
	function action_savetype(){
		$bean = new kr_RMA();
		$product_id= $_REQUEST ['product_id'];
		$case_id=$_REQUEST ['case_id'];
		$selected=$_REQUEST ['selected'];
		
		$sql="SELECT pt.id FROM kr_cases_product_type pt WHERE case_id='".$case_id."' AND product_id='".$product_id."'";
		$r = $bean->db->query($sql);
		$id= $bean->db->fetchRow($r);
		if (isset($id) && $id['id']) {
			$sql="UPDATE kr_cases_product_type SET type='".implode(',',$selected)."' WHERE id=".$id['id'];
		} else {
			$sql="INSERT INTO  kr_cases_product_type  (product_id, case_id, type) VALUES ('".$product_id."','".$case_id."','".implode(',',$selected)."')";
		}
		$bean->db->query($sql);
		 
		die('OK');
	}
}

  
<?php
//SugarWidgetSubPanelCreateOrderButton
 
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
 * @copyright   Copyright (c) 2013 Kraus USA. (http://www.kraususa.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Created: Oct 18, 2013
 *
 */
 
require_once('include/utils.php');

class SugarWidgetSubPanelDetailViewProductType extends SugarWidgetField
{
	 
	 
 
 
	function displayList($layout_def)
	{	 
		$module = '';
 		$dropdown_name=	'case_options_list';  //case_type_dom - name of dropdown
		if(empty($layout_def['target_record_key']))
		{
			$record = $layout_def['fields']['ID'];
		}
		else
		{
			$record_key = strtoupper($layout_def['target_record_key']);
			$record = $layout_def['fields'][$record_key];
		}
	 

		preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $record);
		$record=str_replace(array('/',' '),array('','_'),$record);
		$parent_id= $_REQUEST ['record'];
		$products= new SM_Products();
		$sql="SELECT pt.id, pt.type, pt.product_id, pt.case_id FROM kr_cases_product_type pt WHERE case_id='".$parent_id."' AND product_id='".$record."'";
		$r = $products->db->query($sql);
	  
		 
		//$val= translate($dropdown_name, '', 'Defect');
		$list = translate($dropdown_name); 
		
		$html="";
		 
		
		$groups=array(array('f_','Faucet'), array('s_','Sink'),array('a_','Accessories'),array('g_','General Inquiries/Exceptions'));
		$html_group=array();
		while($type= $products->db->fetchByAssoc($r)) {
			$have_types=1;
		/*	$type['id'];
			$type['type'];
			$type['case_id'];
			$type['product_id'];			
		*/			
			$selected_toptions=explode(",", $type['type']);
		} 			
		$link = "index.php?module=kr_RMA&action=savetype&product_id=".$record."&case_id=".$parent_id;
 
			foreach ($list as $key=>$option) {
				$checked="";
				if (in_array($key,$selected_toptions))
							$checked="checked";				
				if (strpos($key,$groups[0][0]) !== false)													 
					$html_group[0].='<div><input type="checkbox" rel="'.$record.'" class="type_checkbox_'.$record.'" name="case_product_type[]" value="'.$key.'" '.$checked.' />&nbsp'.$option."</div>";
				elseif (strpos($key,$groups[1][0]) !==  false)		
					$html_group[1].='<div><input type="checkbox" rel="'.$record.'" class="type_checkbox_'.$record.'" name="case_product_type[]" value="'.$key.'" '.$checked.' />&nbsp'.$option."</div>";
				elseif (strpos($key,$groups[2][0]) !==  false)
					$html_group[2].='<div><input type="checkbox" rel="'.$record.'" class="type_checkbox_'.$record.'" name="case_product_type[]" value="'.$key.'" '.$checked.' />&nbsp'.$option."</div>";
				elseif (strpos($key,$groups[3][0]) !==  false)
					$html_group[3].='<div><input type="checkbox" rel="'.$record.'" class="type_checkbox_'.$record.'" name="case_product_type[]" value="'.$key.'" '.$checked.' />&nbsp'.$option."</div>";
					
			}
			
			for ($i=0; $i<count($groups);$i++) {
				$html.='<fieldset style=" float:left; width:360px;" class="group"><legend>'.$groups[$i][1].'</legend><ul style="padding-left:0px;margin-left:0px;" class="checkbox">'.$html_group[$i].'</ul></fieldset>';
			}
			 
			
			$html.='<script type="text/javascript">
				$(document).ready(function () {
    				$("input.type_checkbox_'.$record.'").each(function () {
        				$(this).click(function(){
								var checked=[];
								var product_id=$(this).attr("rel");
    						 $("input.type_checkbox_"+product_id).each(function () {
									if ($(this).prop("checked")) {
											checked.push($(this).attr("value"));
										}
							 	});
							var url="index.php?module=kr_RMA&action=savetype";
					$.get( url, { "selected[]": checked, product_id: product_id, case_id: "'.$parent_id.'"  } );
							/*$.ajax({
                				url: url,
                				type: "GET",
               					data: "values_json="+JSON.stringify(checked),
                				success: function(data) {}
            				});*/
						});
    				});
				});
			
				</script>';	

			
		return $html;
		 			 				 	 
		}

}
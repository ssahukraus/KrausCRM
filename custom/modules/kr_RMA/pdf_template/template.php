<page>
<style type="text/css">
.info-field td {padding-bottom:5px;}
.data-fields {padding-top:15px; padding-bottom:5px; width:100%;}
.pdf-table-comments {margin-left:15px;}
.block_title {font-size: 18px;background-color: #CCCCCC;padding: 2px 0px 2px 5px;font-weight: bold;border: 0px;}
.li_ship_address{padding-left:0px;}
.items-table{width: 100%; padding-bottom:10px;}
.item-colum-title {padding: 2px 0px 2px 5px; font-weight:bold;  border-right:1px solid #000000;  border-top:1px solid #000000;  border-bottom:1px solid #000000;}
.title-sku{  border-left:1px solid #000000;}
.item-qty {text-align:center;  padding: 2px 0px 2px 0px; border-right:1px solid #000000; border-bottom:1px solid #000000; }
.item-sku {border-bottom:1px solid #000000;  padding: 2px 0px 2px 5px; border-right:1px solid #000000; border-left:1px solid #000000;}

table { border-collapse:collapse;}
</style>
<table style="width:100%;">
    <tr>
        <td>
          <img src="images/kraus-logo.png" /> 
        </td>
        <td style="padding-left:30px;" >
           <h1>RMA REQUEST FORM</h1> 
        </td>  
        <?php if (!empty($rma_number)) { ?>
        <td  style="padding-left:100px;">
     		<img src="barcodes/<?php echo strtolower($rma_number);?>.png" /> 
        </td>   
        <?php } ?>
    </tr>
</table>
<div class="block_title">
	<label>Instructions for Return:</label>
</div>
<div class="data-fields" > Please follow these instructions when returning your items to Kraus USA, Inc.
	<ol>
		<li class="li_style">Insert copy of original P.O. and this form inside the return package.</li>
		<li class="li_style">Please make sure that the RMA number is <strong>written on the outer portion of the box.</strong></li>
		<li class="li_style"><label>Ship Return Package to : Kraus USA, Inc. Returns Department 12 Harbor Park Drive Port Washington, NY 11050</label></li>
	</ol>
</div>
<div class="block_title" >
	<label>Return Details:</label>
</div>
<div  class="data-fields" >
	<table class="pdf-table" border="0" width="1024px"> 
		<tr>
		<td align="left" width="50%">
			<table class="pdf-table" border="0" width="100%">
			<tr class="info-field">
				<td><label>Return Request Date: </label></td>
				<td><?php echo  date("m/d/Y",strtotime($request_date)); ?></td>		 
			</tr>
			<tr class="info-field"><td><label>Dealer: </label></td>
				<td><?php echo $dealer_name; ?></td>
			</tr>
			<tr class="info-field"><?php if (!empty($rma_number)) { ?>
				<td><label>RMA#: </label></td>
				<td><?php echo $rma_number; ?></td>
				<?php } ?>
			</tr>
			</table>
		</td>
		<td align="left" width="50%"  >
			<table class="pdf-table-comments"   border="0" width="100%">
				<?php if (!empty($comments)) { ?>
				<tr>
					<td  width="100%" >Comments:</td>
				</tr>
				<tr>
					<td width="100%" ><?php echo nl2br($comments);?></td>
				</tr> 
				<?php } ?>
			</table>
		</td>
		</tr>
	</table>
</div> 
<div class="block_title">
	<label>Order Details:</label>
</div>
<div class="data-fields">
	<table class="pdf-table" border="0">
	<tr class="info-field"><td><label>Order #: </label></td>
		<td><?php echo $order_number; ?></td>
	</tr>     
	<tr class="info-field"><td><label>Customer Name: </label></td>
		<td><?php echo $customer_name; ?></td> 
	</tr>
	<tr class="info-field"><td><label>Customer Address: </label></td>
		<td><label><?php echo $customer_address; ?> </label></td> 
	</tr>
	</table>
</div>
<div class="block_title">
	<label>Return Details:</label>
</div>
<div class="data-fields"   >
	<table class="items-table" >
    <tr>		 
		<td class="item-colum-title title-sku" style="width: 95%;" >SKU/Model#</td>
		<td class="item-colum-title" style="width: 5%;" >Qty</td>   
    </tr>
<?php foreach ($related_products as $pr): ?>
	<tr>
		<td class="item-sku"><?php echo $pr->sm_products_id_c;?></td>
		<td class="item-qty"><?php echo $pr->product_qty_c;?></td>
	</tr>
<?php  endforeach;?>
	</table>
</div>	
<div class="block_title">
	<label>Note:</label>
</div>
<div class="data-fields">All return items will be rejected if the requirements are not completed as requested. Items returned will be inspected.<br/>
	If you have any further questions, comments, or concerns, please do not hesitate to let us know. We will be more than<br/>happy to assist you.<br/><br/>
	Thank you for choosing Kraus Products.
</div>
</page>
<page_footer>
  <table>
    <tr>
        <td style="text-align:left;  width:10%;" >
            <?php echo date("m/d/Y")?> 
        </td>
        <td style="font-size:12px; color:black;text-align:right; padding-left: 580px;">
           <i>Page [[page_cu]] of [[page_nb]]</i>
        </td>     
    </tr>
</table>  
</page_footer>
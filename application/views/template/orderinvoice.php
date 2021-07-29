<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
<!--
span.cls_003{font-family:Tahoma,serif;font-size:9.8px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:Tahoma,serif;font-size:9.8px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_002{font-family:Tahoma,serif;font-size:11.9px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_002{font-family:Tahoma,serif;font-size:11.9px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_004{font-family:Tahoma,serif;font-size:11.9px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_004{font-family:Tahoma,serif;font-size:11.9px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_005{font-family:Tahoma,serif;font-size:9.8px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_005{font-family:Tahoma,serif;font-size:9.8px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_006{font-family:Tahoma,serif;font-size:9.8px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
div.cls_006{font-family:Tahoma,serif;font-size:9.8px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
span.cls_007{font-family:Tahoma,serif;font-size:11.2px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_007{font-family:Tahoma,serif;font-size:11.2px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="d344d732-efc9-11eb-a980-0cc47a792c0a_id_d344d732-efc9-11eb-a980-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-306px;top:0px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="d344d732-efc9-11eb-a980-0cc47a792c0a_id_d344d732-efc9-11eb-a980-0cc47a792c0a_files/background1.jpg" width=612 height=792></div>
<div style="position:absolute;left:531.00px;top:30.00px" class="cls_003"><span class="cls_003">(Page 1 of 1)</span></div>
<div style="position:absolute;left:246.00px;top:30.12px" class="cls_002"><span class="cls_002">Tax Invoice cum Challan</span></div>
<div style="position:absolute;left:384.00px;top:60.00px" class="cls_003"><span class="cls_003">InvoiceNo</span></div>
<div style="position:absolute;left:486.00px;top:60.00px" class="cls_003"><span class="cls_003">Date</span></div>
<div style="position:absolute;left:42.00px;top:60.12px" class="cls_004"><span class="cls_004">COMPANY</span></div>
<div style="position:absolute;left:48.00px;top:78.00px" class="cls_003"><span class="cls_003"><?php echo $company->address; ?>, Mob:<?php echo $company->phone; ?></span></div>
<div style="position:absolute;left:384.00px;top:78.00px" class="cls_005"><span class="cls_005"><?php echo 'INV'.$order->order_number;?></span></div>
<div style="position:absolute;left:486.00px;top:78.00px" class="cls_005"><span class="cls_005"><?php echo date('d/m/Y',strtotime($order->created_date));?></span></div>

<!-- <div style="position:absolute;left:384.00px;top:96.00px" class="cls_003"><span class="cls_003">Supplier's Ref</span></div>
<div style="position:absolute;left:486.00px;top:96.00px" class="cls_003"><span class="cls_003"><?php //echo $order->supplier_name; ?></span></div> -->
<div style="position:absolute;left:48.00px;top:102.00px" class="cls_003"><span class="cls_003">Con:</span></div>
<div style="position:absolute;left:74.31px;top:102.00px" class="cls_003"><span class="cls_003"><?php echo $company->phone; ?></span></div>
<div style="position:absolute;left:48.00px;top:114.00px" class="cls_003"><span class="cls_003">GSTIN: <?php echo $company->gstin; ?></span></div>
<div style="position:absolute;left:48.00px;top:126.00px" class="cls_003"><span class="cls_003">State: <?php echo $company->state; ?></span></div>
<div style="position:absolute;left:384.00px;top:132.00px" class="cls_003"><span class="cls_003">Buyer's Order No.</span></div>
<div style="position:absolute;left:486.00px;top:132.00px" class="cls_003"><span class="cls_003"><?php echo 'OR'.$order->order_number;?></span></div>
<div style="position:absolute;left:42.00px;top:150.00px" class="cls_006"><span class="cls_006">Consignee</span></div>
<div style="position:absolute;left:55.56px;top:168.00px" class="cls_003"><span class="cls_003">USHAS TRADERS</span></div>
<div style="position:absolute;left:384.00px;top:168.00px" class="cls_003"><span class="cls_003">Despatch Doc. No.</span></div>
<div style="position:absolute;left:486.00px;top:168.00px" class="cls_003"><span class="cls_003">Delivery Note Date</span></div>
<div style="position:absolute;left:55.56px;top:180.00px" class="cls_003"><span class="cls_003">Add: VELLORE, VEKKIKOVIL</span></div>
<div style="position:absolute;left:76.86px;top:192.00px" class="cls_003"><span class="cls_003">VELLORE</span></div>
<div style="position:absolute;left:76.86px;top:204.00px" class="cls_003"><span class="cls_003">VELLOR</span></div>
<div style="position:absolute;left:384.00px;top:204.00px" class="cls_003"><span class="cls_003">Despached Through    Destination</span></div>
<div style="position:absolute;left:55.56px;top:216.00px" class="cls_003"><span class="cls_003">Mobile: 8768768787</span></div>
<div style="position:absolute;left:55.56px;top:228.00px" class="cls_003"><span class="cls_003">GSTIN: 66KSDKUGKSHDG, State: 33-TamilNadu</span></div>
<div style="position:absolute;left:43.56px;top:252.72px" class="cls_003"><span class="cls_003">Sl</span></div>
<div style="position:absolute;left:435.00px;top:252.72px" class="cls_003"><span class="cls_003">Disc</span></div>
<div style="position:absolute;left:458.28px;top:252.72px" class="cls_003"><span class="cls_003">CGST</span></div>
<div style="position:absolute;left:488.28px;top:252.72px" class="cls_003"><span class="cls_003">SGST</span></div>
<div style="position:absolute;left:117.72px;top:258.00px" class="cls_003"><span class="cls_003">Description of Goods</span></div>
<div style="position:absolute;left:267.72px;top:258.00px" class="cls_003"><span class="cls_003">HSN/SAC</span></div>
<div style="position:absolute;left:325.44px;top:258.00px" class="cls_003"><span class="cls_003">Qty</span></div>
<div style="position:absolute;left:367.44px;top:258.00px" class="cls_003"><span class="cls_003">Rate</span></div>
<div style="position:absolute;left:409.44px;top:258.00px" class="cls_003"><span class="cls_003">per</span></div>
<div style="position:absolute;left:534.72px;top:258.00px" class="cls_003"><span class="cls_003">Amount</span></div>
<div style="position:absolute;left:42.00px;top:264.72px" class="cls_003"><span class="cls_003">No</span></div>
<div style="position:absolute;left:438.72px;top:264.72px" class="cls_003"><span class="cls_003">%</span></div>
<div style="position:absolute;left:465.72px;top:264.72px" class="cls_003"><span class="cls_003">%</span></div>
<div style="position:absolute;left:495.72px;top:264.72px" class="cls_003"><span class="cls_003">%</span></div>

<?php foreach ($products as $key => $val){ ?>

<div style="position:absolute;left:49.56px;top:294.00px" class="cls_003"><span class="cls_003"><?php echo $key+1; ?></span></div>
<div style="position:absolute;left:67.56px;top:294.00px" class="cls_003"><span class="cls_003">
<?php echo $val->id;
$product = $this->db->where('id',$val->id)->get('products')->row();
echo (!empty($product)) ? $product->name : '';
?>
</span></div>
<div style="position:absolute;left:144.41px;top:294.00px" class="cls_003"><span class="cls_003">[JACKSON]</span></div>
<div style="position:absolute;left:267.72px;top:294.00px" class="cls_003"><span class="cls_003"><?php echo $val->hsn;?></span></div>
<div style="position:absolute;left:333.72px;top:294.00px" class="cls_003"><span class="cls_003"><?php echo $val->product_qty;?></span></div>
<div style="position:absolute;left:375.72px;top:294.00px" class="cls_003"><span class="cls_003"><?php echo $val->product_amount;?></span></div>
<div style="position:absolute;left:411.00px;top:294.00px" class="cls_003"><span class="cls_003">PCS</span></div>
<div style="position:absolute;left:441.72px;top:294.00px" class="cls_003"><span class="cls_003"><?php echo $order->discount;; ?></span></div>
<div style="position:absolute;left:467.28px;top:294.00px" class="cls_003"><span class="cls_003"><?php echo $val->cgst;?></span></div>
<div style="position:absolute;left:498.72px;top:294.00px" class="cls_003"><span class="cls_003"><?php echo $val->sgst;?></span></div>
<div style="position:absolute;left:545.28px;top:294.00px" class="cls_003"><span class="cls_003">5803.57</span></div>


<?php } ?>

<div style="position:absolute;left:536.28px;top:576.00px" class="cls_005"><span class="cls_005">35216.40</span></div>
<div style="position:absolute;left:47.28px;top:594.00px" class="cls_003"><span class="cls_003">GST %</span></div>
<div style="position:absolute;left:116.28px;top:594.00px" class="cls_003"><span class="cls_003">Taxable Amt</span></div>
<div style="position:absolute;left:209.28px;top:594.00px" class="cls_003"><span class="cls_003">CGST</span></div>
<div style="position:absolute;left:275.28px;top:594.00px" class="cls_003"><span class="cls_003">SGST</span></div>
<div style="position:absolute;left:59.28px;top:606.00px" class="cls_003"><span class="cls_003">12</span></div>
<div style="position:absolute;left:140.28px;top:606.00px" class="cls_003"><span class="cls_003">29589.29</span></div>
<div style="position:absolute;left:215.28px;top:606.00px" class="cls_003"><span class="cls_003">1775.36</span></div>
<div style="position:absolute;left:281.28px;top:606.00px" class="cls_003"><span class="cls_003">1775.36</span></div>
<div style="position:absolute;left:354.00px;top:606.00px" class="cls_003"><span class="cls_003">CGST</span></div>
<div style="position:absolute;left:546.72px;top:606.00px" class="cls_003"><span class="cls_003">2281.80</span></div>
<div style="position:absolute;left:59.28px;top:617.88px" class="cls_003"><span class="cls_003">18</span></div>
<div style="position:absolute;left:145.44px;top:617.88px" class="cls_003"><span class="cls_003">5627.12</span></div>
<div style="position:absolute;left:220.44px;top:617.88px" class="cls_003"><span class="cls_003">506.44</span></div>
<div style="position:absolute;left:286.44px;top:617.88px" class="cls_003"><span class="cls_003">506.44</span></div>
<div style="position:absolute;left:354.00px;top:623.88px" class="cls_003"><span class="cls_003">SGST</span></div>
<div style="position:absolute;left:546.72px;top:623.88px" class="cls_003"><span class="cls_003">2281.80</span></div>
<div style="position:absolute;left:354.00px;top:647.88px" class="cls_003"><span class="cls_003">Round Off</span></div>
<div style="position:absolute;left:354.00px;top:666.00px" class="cls_007"><span class="cls_007">NET Amount</span></div>
<div style="position:absolute;left:525.00px;top:666.00px" class="cls_007"><span class="cls_007">39780.00</span></div>
<div style="position:absolute;left:51.72px;top:671.88px" class="cls_003"><span class="cls_003">Total</span></div>
<div style="position:absolute;left:133.44px;top:671.88px" class="cls_003"><span class="cls_003">35216.40</span></div>
<div style="position:absolute;left:210.72px;top:671.88px" class="cls_003"><span class="cls_003">2281.80</span></div>
<div style="position:absolute;left:276.72px;top:671.88px" class="cls_003"><span class="cls_003">2281.80</span></div>
<div style="position:absolute;left:42.80px;top:690.72px" class="cls_003"><span class="cls_003">[Rupees Thirty Nine Thousand Seven Hundred Eighty  Only]</span></div>
<div style="position:absolute;left:49.56px;top:713.88px" class="cls_003"><span class="cls_003">Bank Name</span></div>
<div style="position:absolute;left:127.44px;top:713.88px" class="cls_003"><span class="cls_003">ICICI</span></div>
<div style="position:absolute;left:49.56px;top:725.88px" class="cls_003"><span class="cls_003">Branch</span></div>
<div style="position:absolute;left:127.44px;top:725.88px" class="cls_003"><span class="cls_003">CHENNAI</span></div>
<div style="position:absolute;left:49.56px;top:737.88px" class="cls_003"><span class="cls_003">IFSC</span></div>
<div style="position:absolute;left:127.44px;top:737.88px" class="cls_003"><span class="cls_003">ICICI099</span></div>
<div style="position:absolute;left:49.56px;top:749.88px" class="cls_003"><span class="cls_003">A/C No</span></div>
<div style="position:absolute;left:127.44px;top:749.88px" class="cls_003"><span class="cls_003">909987989866</span></div>
<div style="position:absolute;left:414.00px;top:761.88px" class="cls_003"><span class="cls_003">Authorized Signatory</span></div>
</div>

</body>
</html>

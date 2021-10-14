<?php
session_start();
   include_once'../db/connect_db.php';
    error_reporting(0);
    ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Goods Reciept Note</title>
</head>
<body>
<?php


 $date_1=$_GET['date_1'];
  $date_2= $_GET['date_2'];

echo "
<h4>Goods Recieved between: $date_1 and  $date_2</h4>
<hr>


<table border='1' cellspacing='0' cellpading='1' width='100%'>
<thead>
    <tr bgcolor='#d4cecd' align='left'>
        <th>#</th>
        <th>Product Id</th>
        <th>Product Code</th>
         <th>Product Name</th>
          <th>Unit</th>
         <th>Pack</th>
         <th>BaseUnit</th>
        <th>Qty</th>
        <th>@ Ksh</th>
        <th>Total</th>
        <th>vat</th>
        <th>VATable</th>

    </tr>
     </thead>
  <tbody>";

  $no=0;
 $result = mysqli_query($con,"select * from  items_with_supplier_name WHERE order_date BETWEEN '$date_1' AND '$date_2'"); 
    while ($row = mysqli_fetch_array($result)) 
    {
        $invoice_id = $row['invoice_id'];
        $product_id = $row['product_id'];
        $product_code = $row['product_code'];
        $product_name = $row['product_name'];
        $Pack = $row['Pack'];
        $BaseUnit = $row['BaseUnit'];
        $qty = $row['qty'];
          $unit = $row['unit'];
        
        $price= $row['price'];
        $total= $row['total'];
         $vat= $row['vat'];
          $VATable= $row['VATable'];
        $order_date= $row['order_date'];

        $total= number_format($total,2);
        $VATable= number_format($VATable,2);


 $qty = $row['qty'];

$no=1+$no;
       echo "<tr>
        <td>$no</td>
        <td>$product_id</td>
        <td>$product_code</td>
        <td>$product_name</td>
        <td>$unit</td>
        <td>$Pack</td>
        <td>$BaseUnit</td>
        <td>$qty</td>
        <td>$price</td>
        <td>$total</td>
        <td>$vat</td>
        <td>$VATable</td>


        
    </tr>";
}







 $result = mysqli_query($con,"select sum(total) as total_price, sum(VATable) as total_VATable  from  items_with_supplier_name WHERE order_date BETWEEN '$date_1' AND '$date_2'"); 
    while ($row = mysqli_fetch_array($result)) 
    {
        
     
        $total_price= $row['total_price'];
        $total_VATable= $row['total_VATable'];
        $order_date= $row['order_date'];

          $total_price= number_format($total_price,2);
        $total_VATable= number_format($total_VATable,2);

      }


echo "<tr>
        <td colspan='9'></td>
        <td colspan='2'><b>Ksh $total_price</b></td>
      
        <td><b>Ksh $total_VATable</b></td>
        
    </tr>";

 echo " 
  </tbody> 
</table>";


echo "
<br><br><br><br>
<table border='0' width='100%' cellspacing='10'>
<tr align='left'>

<td>
Prepared by: 
</td>

<td>
";

echo '<u>'.$_SESSION['fullname'].'<u>';

echo "
</td>

</tr>


<tr align='left'>

<td>
Approved by: 
</td>

<td>
";

echo '________________________';

echo "
</td>

</tr>


<table>

<br>

<p align='center'>
******************END******************
</p>

";



                     
                  
                 






?>
<?php 
require_once("dompdf/dompdf_config.inc.php");
$html =ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper("A4","potrait");
$dompdf->render();
$canvas = $dompdf->get_canvas();
$font = Font_Metrics::get_font("times-roman", "normal");
$canvas->page_text(270, 820, "Page {PAGE_NUM} of {PAGE_COUNT}", $font, 10, array(0,0,0));
ob_end_clean();
$dompdf->stream("expenditure.pdf", array("Attachment" => 0)); 
?>
</body>
</html>

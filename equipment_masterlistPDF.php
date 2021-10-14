<?php
error_reporting(0);
ob_start();
session_start();
 if (!isset($_SESSION["username"]))
   {
      header("location:login.php");
   }
 include 'dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$result = mysqli_query($con,"select * from  equipment_master"); 
    while ($row = mysqli_fetch_array($result)) 
    {
        $Eqp_NoID = $row['Eqp_NoID'];
        $Eqp_name = $row['Eqp_name'];
         $Department = $row['Department'];
        $Received_on = $row['Received_on'];
         $Installation_date = $row['Installation_date'];
        $Receiving_Condition = $row['Receiving_Condition'];
         $Supplier = $row['Supplier'];
        $Supplier_phone = $row['Supplier_phone'];
        $Supplier_email = $row['Supplier_email'];
        $Serial_No = $row['Serial_No'];	

        echo "
<table border='1' cellspacing=''>
  <tr><td> Eqp_NoID</td> <td>$Eqp_NoID</td>   </tr>
  <tr><td> Serial_No</td> <td>$Serial_No</td>   </tr>
  <tr><td>Eqp name </td>   <td>$Eqp_name </td>   </tr>
  <tr><td>Department</td>   <td>$Department </td>   </tr>
  <tr><td>Received on</td>    <td>$Received_on</td>     </tr>
 <tr><td> Installation date</td>    <td>$Installation_date</td>   </tr>
  <tr><td>Receiving Condition</td>   <td>$Receiving_Condition</td>   </tr>
  <tr><td>Supplier </td>     <td>$Supplier</td>    </tr>
  <tr><td>Supplier phone</td>  <td>$Supplier_phone</td>   </tr>
  <tr><td>Supplier email</td>   <td>$Supplier_email</td> </tr>



</table>

<hr><br>
        ";	

    }



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





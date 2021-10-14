<?php 
session_start(); 
error_reporting(0);

include 'dbconfig.php';
$username= $_SESSION['username'] ; 

$EquipmentID=$_POST['Eqp_NoID'];

$Eqp_name=$_POST['Eqp_name'];
$Department=$_POST['Department'];

$Date_Received=$_POST['Received_on'];
$Installation_date=$_POST['Installation_date'];
$Condition=$_POST['Receiving_Condition'];
$Supplier=$_POST['Supplier'];
$Supplier_Phone=$_POST['Supplier_phone'];
$Supplier_Email=$_POST['Supplier_email'];

$Equipment_Status=$_POST['Equipment_Status'];



echo $query = "update equipment_master 
set 
Eqp_name='$Eqp_name',
Department='$Department',
Received_on='$Date_Received',
Installation_date='$Installation_date',
Receiving_Condition='$Condition',
Supplier='$Supplier'
Supplier_phone='$Supplier_Phone',
Supplier_email='$Supplier_Email',
Equipment_Status='$Equipment_Status'


where Eqp_NoID=".$_POST["Eqp_NoID"];
$result = mysqli_query($con,$query);

$_SESSION["msg"]="Record Updated";
header('Location: edit_equipment.php?id='.$EquipmentID);



?>


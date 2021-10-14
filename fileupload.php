<html>

<head>
  </head>
  <body onload="myFunction()">

<?php
/*
error_reporting (0);
ob_start();
session_start();
*/
 include 'dbconfig.php';

 //$Equipmentprefix="EQPNo";
 $Equipmentid=$_GET["id"];


 $ServiceNo="$Equipmentid";

//echo "$ServiceNo";
/*

$query = "select *   FROM  servicing_details WHERE servicing_detailsID='$ServiceNo' ORDER BY servicing_detailsID desc ";
                $result = mysqli_query($con,$query);

                 while($row=mysqli_fetch_array($result))
{

 $ServiceNo =$row['servicing_detailsID']; 

 $EquipmentNo =$row['EqpNo'];
 $Equipmentname =$row['Eqp_name'];
 $Equipmentid =$row['Eqp_NoID'];
}

echo "equipmentid: $Equipmentid equipment no: $EquipmentNo ";

*/

$fileName="$ServiceNo";
$ext=".pdf";
$newname="$fileName$ext";
// SOURCE + DESTINATION
$source = $_FILES["file-upload"]["tmp_name"];
$destination = $_FILES["file-upload"]["name"];
$error = "";



// ALLOWED FILE EXTENSIONS
if ($error == "") {
  $allowed = ["pdf"];
  $ext = strtolower(pathinfo($_FILES["file-upload"]["name"], PATHINFO_EXTENSION));
  if (!in_array($ext, $allowed)) {



    


  echo "<script>
function myFunction() {
  alert('Report couldn't be uploaded. Only PDF files are allowed ');
}

</script>

";

  header('Refresh: 0; URL=Master_list.php');


  }
}



// FILE SIZE CHECK
if ($error == "") {
  // 1,000,000 = 1MB
  if ($_FILES["file-upload"]["size"] > 50000000) {
    $error = $_FILES["file-upload"]["name"] . " - file size too big!";

echo "<script>
function myFunction() {
  alert('Report couldn't be uploaded. File size too big! ');
}

</script>

";

  header('Refresh: 0; URL=Master_list.php');





  }
}

// ALL CHECKS OK - MOVE FILE
if ($error == "") {
  if (!move_uploaded_file( $source, "uploads/$newname")) {
    $error = "Error moving $source to $destination";



  echo "<script>
function myFunction() {
  alert(' Report couldn't be uploaded. Destination not found! ');
}

</script>

";

header('Refresh: 0; URL=Master_list.php');






  }
}

// ERROR OCCURED OR OK?
if ($error == "") {
 
  echo "<script>
function myFunction() {
  alert('$EquipmentNo:$Equipmentname service report for service ID:$ServiceNo, Uploaded Successfully ');
}

</script>

";

 // header('Refresh: 1; URL=add_servicing.php?id=$Equipmentid&EquipmentNo=$EquipmentNo');
//header('Refresh:0; URL=Master_list.php');

header( 'Location: ' . $_SERVER['HTTP_REFERER']);


} else {
  echo $error;
}
?>

</body>
</html>

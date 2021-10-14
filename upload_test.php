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
<html lang="en">
<head>

 
</head>

  <?php include 'head.php';  ?>


  <body class="app sidebar-mini">
    <!-- Navbar-->
 <?php include 'sidenav.php';  ?>
  
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Equipment servicing </h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul>
      </div>



      

      <div class="row">


        <div class="col-md-12">
          <div class="tile">

            <div  class="form-group row"  style="background-color: #088A68">

              <?php

 include 'dbconfig.php';

$Equipment_ID=$_GET["id"];
$EquipmentNo=$_GET["EquipmentNo"];


//getting date difference



$datediff = "select *, DATEDIFF(servicingdue_date, Service_date) AS nextservice FROM  servicing_details WHERE EqpNo='$EquipmentNo' ORDER BY servicingdue_date asc ";
                $result = mysqli_query($con,$datediff);


                 while($row=mysqli_fetch_array($result))
{

 $nextservice =$row['nextservice'];
 $servicingdue_date =$row['servicingdue_date']; 


 $now = time(); // or your date as well
$your_date = strtotime($servicingdue_date);
$datediff1 = ceil(( $your_date -$now)/86400);

 }




$query2 = "SELECT * FROM `equipment_master` WHERE `Eqp_NoID` = '$Equipment_ID' ";
        $result5 = mysqli_query($con,$query2);        
         while($row=mysqli_fetch_array($result5))

        {          

                   $Equipment_ID=$row['Eqp_NoID'];
                  $Eqp_name=$row['Eqp_name'];
                  $Department=$row['Department'];
                  $Supplier=$row['Supplier'];
                  $Status=$row['Equipment_Status'];

      }
 
echo "<font color='White' class='col-md-10'     >  <b> <h4> $Eqp_name: Equipment ID:$Equipment_ID Department: $Department <br><br>

 Next service is due in: $datediff1 Days    </b> </h4></font>";
?>
</div>


            <h3 class="tile-title">Servicing Details</h3>





            <div class="tile-body">


<?php 

  include 'dbconfig.php';
  

 if(isset($_POST['Submit']))

 
{

$Eqp_name= mysqli_real_escape_string($con, $_POST['Eqp_name']);
$Supplier= mysqli_real_escape_string($con, $_POST['Supplier']); 
$Department= mysqli_real_escape_string($con, $_POST['Department']); 


$Service_date= mysqli_real_escape_string($con, $_POST['Service_date']);
$Serviced_by= mysqli_real_escape_string($con, $_POST['Serviced_by']);
$Servicing_engphone= mysqli_real_escape_string($con, $_POST['Servicing_engphone']); 

$servicingdue_date= mysqli_real_escape_string($con, $_POST['servicingdue_date']);

 
 $sql = "INSERT INTO servicing_details 
(

EqpNo,
Eqp_NoID,
Eqp_name,
Supplier,
Department,
Service_date,
Serviced_by,
Servicing_engphone,
servicingdue_date


) 

VALUES (

 '$EquipmentNo',
 '$Equipment_ID',
 '$Eqp_name',
 '$Supplier', 
 '$Department',
 '$Service_date',
 '$Serviced_by',
 '$Servicing_engphone',     
 '$servicingdue_date' 
 
)";

if(mysqli_query($con, $sql))

{
date_default_timezone_set("Africa/Nairobi");
                      
              
           echo   "<div class='alert alert-success'>";
            echo  "<button class='close' data-dismiss='alert'>&times;</button>";
            echo "<b>Service updated successfully</b>";
            echo   '</div>'; 
        }
         else
        {
             echo   "<div class='alert alert-danger'>";
      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
      echo   "<strong>An Error occured while Sending  your Request...try again

      </strong> ";
      echo   '</div>';
    
        }


}

 include 'dbconfig.php';
// close connection
mysqli_close($con);
  
  
  
  ?>



              <form class="" method="POST" id="myForm">

                <div class="form-group row">
                  <label class="control-label col-md-2">Equipment Name</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Eqp_name" type="text" placeholder="" value=

                    '<?php
                    echo $Eqp_name;

                    ?>'
                     required="" readonly>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2">  Supplier Name</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Supplier" type="text" placeholder="" value= '<?php
                    echo $Supplier;

                    ?>'
                     readonly="" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2">Department</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Department" type="text" value= '<?php
                    echo $Department;

                    ?>'
                     readonly="" required="">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="control-label col-md-2">Equipment Status</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Status" type="text" value= '<?php
                    echo $Status;

                    ?>'
                     readonly="" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2">Service Date:</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Service_date" type="date" placeholder="Date Received" required="">
                  </div>
                </div>

                  <div class="form-group row">
                  <label class="control-label col-md-2">Serviced BY: </label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Serviced_by" type="text" placeholder="Serving person's name" required="">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="control-label col-md-2">Serving Eng. phone No: </label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Servicing_engphone" type="text" placeholder="Serving person's Phone No." required="">
                  </div>
                </div>


                <div class="form-group row">
                  <label class="control-label col-md-2">Service Due Date</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="servicingdue_date" type="date" placeholder="Installation Date" required="">
                  </div>
                </div>




                
              <div class="row">
                <div class="col-md-8 col-md-offset-2">

                  <button class="btn btn-primary" type="Submit" name="Submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>submit</button>&nbsp;&nbsp;&nbsp;                  

                  <a class="btn btn-danger" onclick="myFunction()"  ><i class="fa fa-fw fa-lg fa-times-circle"></i>Clear</a>

                  


                  <script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>


                </div>

              </div>
            



              </form>



            </div>
            
          </div>



          <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">



<?php                          
//
 include 'dbconfig.php';


 $result2 = mysqli_query($con,"SELECT COUNT(*) FROM   servicing_details WHERE EqpNo='$EquipmentNo' ");

$row = mysqli_fetch_assoc($result2);
$size = $row['COUNT(*)'];



echo "<font color='green'><b> $size past Equipment Services Records Found</b></font> <br>";
     

?>
  <!-- Modal -->


<?php 

$query = "select * FROM  servicing_details WHERE EqpNo='$EquipmentNo' ORDER BY servicing_detailsID desc ";
                $result = mysqli_query($con,$query);

                 while($row=mysqli_fetch_array($result))
{

 $serviceID =$row['servicing_detailsID']; 


}

//echo "$serviceID";

 ?>

  


    <!--end of modal -->      
            
            
          
        <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">


              <div class="table-responsive">


                <?php 
               
                 $query = "select *,date_format(Service_date, '%D %b %Y') as Service_date,date_format(servicingdue_date, '%D %b %Y') as servicingdue_date  FROM servicing_details ORDER BY serviceID  asc ";


 $query = "select *   FROM  servicing_details WHERE EqpNo='$EquipmentNo' ORDER BY servicing_detailsID asc ";


                $result = mysqli_query($con,$query);





               echo "<table class='table table-hover table-bordered' id='sampleTable'>"; 

               echo "    <thead>
                      <tr>
                
 

            
<th>ID</th>
 <th>Equipment No</th>
 <th>Equipment name</th>
 <th>Equipment Status</th>
 <th>Department</th>
<th>Supplier</th> 
 <th>Service Date</th>
 <th>Serviced By</th>
 <th>Eng. Contacts</th>
 <th>Next Service</th>
 <th>Attach Report</th>
 <th>View Report</th>



                      </tr>
                    </thead>";
                 echo "   <tbody>";
                     
        

    while($row=mysqli_fetch_array($result))
{

 $serviceID =$row['servicing_detailsID']; 
 $EqpNo =$row['EqpNo'];
 $Eqp_name=$row['Eqp_name']; 
 $Supplier=$row['Supplier']; 
 $Department=$row['Department']; 
 $Service_date=$row['Service_date']; 
 $Serviced_by=$row['Serviced_by']; 
 $Servicing_engphone=$row['Servicing_engphone']; 
 $servicingdue_date=$row['servicingdue_date']; 




    echo "<tr>   

 <td>$serviceID</td> 
  <td>$EqpNo</td>  
  <td>$Eqp_name</td>
  <td>$Status</td>
  <td>$Department</td>
  <td>$Supplier</td>  
  <td>$Service_date</td>
  <td>$Serviced_by</td>
  <td>$Servicing_engphone</td>
  <td>$servicingdue_date</td>

  <td>
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal$serviceID\"><i class=\"fa fa-upload\" aria-hidden=\"true\"> upload file </i>
  </button> 


<div class=\"modal fade\" id=\"myModal$serviceID\" role=\"dialog\">
    <div class=\"modal-dialog\">    
      <!-- Modal content-->
      <div class=\"modal-content\">

        <div class=\"modal-header\">
          <h4> Servicing Report Upload</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>          
        </div>

         <form action=\"fileupload.php?id=$serviceID\" method=\"post\" enctype=\"multipart/form-data\">
        
      <input class=\"modal-body\" type=\"file\" name=\"file-upload\" id=\"file-upload\">

      <div class=\"modal-footer\">

      <input type=\"submit\" value=\"Upload File\" name=\"submit\">

      </div>

            </form>
            

      </div>      
    </div>
  </div>




   </td>

  <td>
  <button type=\"button\" class=\"btn btn-primary\"  ><i class=\"fa fa-download\" aria-hidden=\"true\"> <a href=\"uploads/$serviceID.pdf \"   style=\"color: white\" target=\"_blank\"> View Report </a> </i> </button>
   </td>
   
    </tr>";
}
                
              echo "</tbody>";
                            
                    
                 echo " </table>";
                            
                ?>
                 
               
              </div>
            </div>
          </div>
        </div>
      </div>

              
            </div>
          </div>
        </div>
      </div>




        </div>

        <div class="clearix"></div>
       
      </div>


    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->

    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>

      <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">
      $('#demoNotify').click(function(){
        $.notify({
          title: "Update Complete : ",
          message: "Something cool is just updated!",
          icon: 'fa fa-upload' 
        },{
          type: "info"
        });
      });

      $('#demoSwal').click(function(){
        swal({

          title: "select file to upload",

          {

          }







          
          type: "",
          showCancelButton: true,
          confirmButtonText: "Submit",
          cancelButtonText: "Cancel Upload",
          closeOnConfirm: false,
          closeOnCancel: false
        }, 

        function(isConfirm) {
          if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
      
    </script>

    <script>
      $('.bs-component [data-toggle="popover"]').popover();
      $('.bs-component [data-toggle="tooltip"]').tooltip();
    </script>


    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', '', 'auto');
        ga('send', 'pageview');
      }
    </script>

    
    <!-- Google analytics script-->
  


  </body>
</html>
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
       



          <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">







  


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
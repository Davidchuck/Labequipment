<!DOCTYPE html>
<html lang="en">
  <?php include 'head.php';  ?>


  <body class="app sidebar-mini">
    <!-- Navbar-->
 <?php include 'sidenav.php';  ?>
  
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Equipment Registration Form</h1>
          
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
            <h3 class="tile-title">Equipment Details</h3>
            <div class="tile-body">






<?php 

  include 'dbconfig.php';
  

 if(isset($_POST['Submit']))

 
{
 /*
  $Email=$_SESSION["Email"] ;

       $query7 = "SELECT * FROM `member_registration` WHERE `Email` = '$Email'";
        $result7 = mysqli_query($con,$query7);
         while($row=mysqli_fetch_array($result7))

        {

          

          $Member_registrationID=$row['Member_registrationID'];
          $Email=$row['Email'];
          $Title=$row['Title'];
          $FName=$row['FName'];
          $LName = $row['LName'];
          
      }

 */


$Eqp_name= mysqli_real_escape_string($con, $_POST['Eqp_name']); 
$Department= mysqli_real_escape_string($con, $_POST['Department']); 
$Received_on= mysqli_real_escape_string($con, $_POST['Received_on']);
$Installation_date= mysqli_real_escape_string($con, $_POST['Installation_date']);
$Receiving_Condition= mysqli_real_escape_string($con, $_POST['Receiving_Condition']); 
$Supplier= mysqli_real_escape_string($con, $_POST['Supplier']);
$Supplier_phone= mysqli_real_escape_string($con, $_POST['Supplier_phone']);
$Supplier_email= mysqli_real_escape_string($con, $_POST['Supplier_email']);
$Equipment_Status= mysqli_real_escape_string($con, $_POST['Equipment_Status']); 
$Serial_No= mysqli_real_escape_string($con, $_POST['Serial_No']);
 
 
 $sql = "INSERT INTO equipment_master 
(

Eqp_name,
Department,
Received_on,
Installation_date,
 Receiving_Condition, 
 Supplier,
 Supplier_phone,
 Supplier_email,
 Equipment_Status,
 Serial_No

) 

VALUES (

 '$Eqp_name',
 '$Department',
 '$Received_on',
 '$Installation_date',
  '$Receiving_Condition',
  '$Supplier',    
   '$Supplier_phone',

   '$Supplier_email',
   '$Equipment_Status',
   '$Serial_No'
   
 
)";

if(mysqli_query($con, $sql))

{
date_default_timezone_set("Africa/Nairobi");
                      
              
           echo   "<div class='alert alert-success'>";
            echo  "<button class='close' data-dismiss='alert'>&times;</button>";
            echo "<b>Equipment Added successfully</b>";
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
                    <input class="form-control col-md-9" name="Eqp_name" type="text" placeholder="Equipment Name" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2">Serial Number</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Serial_No" type="text" placeholder="Equipment Serial Number" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2">Department</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Department" type="text" placeholder="Department" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2">Equipment Status</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Equipment_Status" type="text" placeholder="Equipment Status" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2"> Date Received</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Received_on" type="date" placeholder="Date Received" required="">
                  </div>
                </div>


                <div class="form-group row">
                  <label class="control-label col-md-2">  Installation_date</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Installation_date" type="date" placeholder="Installation Date" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2">  Receiving_Condition</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Receiving_Condition" type="text" placeholder="Condition Received" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2">  Manufacture/Supplier Name</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Supplier" type="text" placeholder="Supplier Name" required="">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="control-label col-md-2">  Manufacture/Supplier phone No</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Supplier_phone" type="text" placeholder="Supplier Phone" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2">  Manufacture/Supplier Email</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="Supplier_email" type="email" placeholder="Supplier Email" >
                  </div>
                </div>

                <div class="tile-footer">
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
            </div>



              </form>

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
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>
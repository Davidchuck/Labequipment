<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';  ?>

  <body class="app sidebar-mini">
    <!-- Navbar-->

     <?php include 'sidenav.php';  ?>
    
    <main class="app-content">
      
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Equipment List</h1>
          <p>List of all registered equipment</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
    


      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">




<?php                          
//
 include 'dbconfig.php';
$result2 = mysqli_query($con,"SELECT COUNT(*) FROM   equipment_master ");

$row = mysqli_fetch_assoc($result2);
$size = $row['COUNT(*)'];

echo "<font color='green'><b> You Have - $size Registered Equipment.</b></font> <br>";
     

?>


              <div class="table-responsive">


                <?php 
               
                 $query = "select *,date_format(Received_on, '%D %b %Y') as Received_on,date_format(Installation_date, '%D %b %Y') as Installation_date  FROM equipment_master ORDER BY Eqp_NoID  desc



";


 $query = "select *
   FROM 

 equipment_master
ORDER BY Eqp_NoID desc



";


                $result = mysqli_query($con,$query);





               echo "<table class='table table-hover table-bordered' id='sampleTable'>"; 

               echo "    <thead>
                      <tr>
                
 

            
<th> ID</th>
<th> Equipment No.</th>

 <th> Equipment Name</th>
 <th> Serial Number</th>
 <th> Department</th>
 <th> Equipment Status</th> 
<th>  Date Received</th>
 <th> Installation Date</th>
 <th> Condition Received</th>
 <th> Supplier</th>
 <th> Supplier Phone No.</th>
 <th> Supplier Email</th>
 <th> Date Added </th>
 <th> Action </th>


                      </tr>
                    </thead>";
                 echo "   <tbody>";
                     
        

    while($row=mysqli_fetch_array($result))
{

 $EquipmentID =$row['Eqp_NoID']; 
 $Equipment=$row['Eqp_name']; 
 $Department=$row['Department']; 
 $Date_Received=$row['Received_on']; 
 $Installation_Date=$row['Installation_date']; 
 $Condition=$row['Receiving_Condition']; 
 $Supplier=$row['Supplier']; 
 $Supplier_Phone=$row['Supplier_phone']; 
 $Supplier_Email=$row['Supplier_email'];
 $Dateadded=$row['Date_Added'];
  $Equipment_Status=$row['Equipment_Status'];
   $Serial_No=$row['Serial_No'];

 

 $EQPprefix="EQPNo$EquipmentID";


    echo "<tr>   

 <td>$EquipmentID</td>

 <td>$EQPprefix</td>

 
  <td><a href=add_servicing.php?id=$EquipmentID&EquipmentNo=$EQPprefix >  $Equipment </a></td>

  <td>$Serial_No</td>
  <td>$Department</td>
   <td>$Equipment_Status</td>  
  <td>$Date_Received</td>
  <td>$Installation_Date</td>
  <td>$Condition</td>
  <td>$Supplier</td>
  <td>$Supplier_Phone</td>
  <td>$Supplier_Email</td>
  <td>$Dateadded</td>
  <td>
                                        
                                                    
              <a  href='edit_equipment.php?id=$EquipmentID'>Edit</a> 

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
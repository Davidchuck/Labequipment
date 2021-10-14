<!DOCTYPE html>
<html lang="en">
  <?php include 'head.php';  ?>


  <body class="app sidebar-mini">
    <!-- Navbar-->
 <?php include 'sidenav.php';  ?>
  
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> User Management Form</h1>
          
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

  if ($userlevel == 'Admin') {
  
}
else
  {
    header('Location: accessdenied.php');
}
  

 if(isset($_POST['Submit']))

 
{

$username= mysqli_real_escape_string($con, $_POST['username']); 
$password= mysqli_real_escape_string($con, $_POST['password']); 
$fullname= mysqli_real_escape_string($con, $_POST['fullname']);
$userlevel= mysqli_real_escape_string($con, $_POST['userlevel']);
$Department= mysqli_real_escape_string($con, $_POST['Department']); 



$passencry= md5($password);
 
  $sql = "INSERT INTO users  
(

username,
password,
fullname,
userlevel,
 Department

) 

VALUES (

 '$username',
 '$passencry',
 '$fullname',
 '$userlevel',
  '$Department'
  
)";

if(mysqli_query($con, $sql))

{
date_default_timezone_set("Africa/Nairobi");
                      
              
           echo   "<div class='alert alert-success'>";
            echo  "<button class='close' data-dismiss='alert'>&times;</button>";
            echo "<b>User Added successfully</b>";
            echo   '</div>'; 

        }
         else
        {
             echo   "<div class='alert alert-danger'>";
      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
      echo   "<strong>Sorry, the user already exists. Please type a different name.

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
                  <label class="control-label col-md-2">Username</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="username" type="text" placeholder="User name" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2">Password</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" type="password" name="password" type="text" placeholder="Password" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2">Full Name</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-9" name="fullname" type="text" placeholder="Full Name" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-2">User Level</label>
                  <div class="col-md-8">
                    

                    <select name="userlevel" required="" class="form-control col-md-9" >
                      <option value="">select user level</option>
                          <option value="User">User</option>
                          <option value="Admin">Admin</option>
                          
                      </select>


                  </div>
                </div>




                  <div class="form-group row">
                  <label class="control-label col-md-2">User Department</label>
                  <div class="col-md-8"> 
                   <select name="Department" required="" class="form-control col-md-9" >
                      <option value="">select user Department</option>
                          <option value="Parasitology">Parasitology</option>
                          <option value="biochemistry">biochemistry</option>                          
                      </select>
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
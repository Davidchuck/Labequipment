<!DOCTYPE html>
<html>
<?php include 'head.php';  ?>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="">
        <h3 style="color: white">Nyumbani Diagnostic Laboratory</h3> <br>
      </div>
      


        <div class="row">


        <div class="col-md-18">
          <div class="tile">
            <h3 class="tile-title" style="text-align-last: center;"><strong>New user Registration  </strong></h3>
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


$username= mysqli_real_escape_string($con, $_POST['username']); 
$fname= mysqli_real_escape_string($con, $_POST['fname']); 
$lname= mysqli_real_escape_string($con, $_POST['lname']);
$password= mysqli_real_escape_string($con, $_POST['password']);


$hash1=password_hash('$password', PASSWORD_DEFAULT);

 
 
 $sql = "INSERT INTO users 
(

username,
fname,
lname,
password
) 

VALUES (

 '$username',
 '$fname',
 '$lname',
 '$password'
   
 
)";

if(mysqli_query($con, $sql))

{
date_default_timezone_set("Africa/Nairobi");
                      
              
           echo   "<div class='alert alert-success'>";
            echo  "<button class='close' data-dismiss='alert'>&times;</button>";
            echo "<b>Account Registered successfully</b>";
            echo   '</div>'; 

            header("location: login.php");
        }
         else
        {
             echo   "<div class='alert alert-danger'>";
      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
      echo   "<strong>Registration Failed...try again

      </strong> ";
      echo   '</div>';
    
        }


}

 include 'dbconfig.php';
// close connection
mysqli_close($con);
  
  
  
  ?>



              <form class="" method="POST">

                <div class="form-group row">
                  <label class="control-label col-md-4">User Name</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-12" name="username" type="text" placeholder="User Name" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-4">First Name</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-12" name="fname" type="text" placeholder="first name" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-4">Last Name</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-12" name="lname" type="text" placeholder="Last Name" required="">
                  </div>
                </div>


                <div class="form-group row">
                  <label class="control-label col-md-4"> Password</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-12" name="password" type="Password" placeholder="Password" required="">
                  </div>
                </div>

                <div class="tile-footer">
              <div class="row">
                <div class="col-md-12 col-md-offset-4">

                  <button class="btn btn-primary" type="Submit" name="Submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
                </div>

              </div>
            </div>



              </form>

            </div>
            
          </div>
        </div>

        <div class="clearix"></div>
       
      </div>


    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>
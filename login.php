<?php
session_start();
error_reporting();
ob_start();
?>


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
      <div class="login-box">




<?php


if (isset($_POST['submit']))
    {     
include_once 'dbconfig.php';

$name=$_POST['username'];

$password1=$_POST['password'];
     
//$pass = $password1;
//$salt = '##[]_H38E9';
//$hash = md5($pass, '$2y$07$'.$salt.'$');

$passencry= md5($password1); 
                
 $query = mysqli_query($con, "SELECT * FROM users WHERE username='$name' and password='$passencry' and Active_Status='YES' ");


 if (mysqli_num_rows($query) >= 1)
{
 //echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";    

$_SESSION['username']=$name;
    header ("Location: index.php");

    
  }

else
  {
   
       echo   "<div class='alert alert-danger'>";
            echo  "<button class='close' data-dismiss='alert'>&times;</button>";
            echo  " <strong>Couldn'nt login; Wrong Username or Password, or the account does not exist! <br> </strong> <br>
             ";
            echo   '</div>';
     
 }
}

?>    





        <form class="login-form" action="" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USER NAME</label>
            <input class="form-control" type="text" name="username" placeholder="User Name" autofocus required="">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder="Password" required="">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>

            </div><br>
            <p class="semibold-text mb-2">New User? <a href="Register.php" data-toggle="">Creat Account</a></p>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit" name="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
   
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
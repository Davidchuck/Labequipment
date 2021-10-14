<?php
session_start();
ob_start();
error_reporting(0);
 if (!isset($_SESSION["username"]))
   {
      header("location:login.php");
   }
 
$userlogged = $_SESSION["username"];

include 'dbconfig.php';
 $query = "select * FROM users Where username='$userlogged' ";
 $result = mysqli_query($con,$query);

while($row=mysqli_fetch_array($result))
{
 $username=$row['username'];

  $userlevel=$row['userlevel'];
}



  if ($userlevel == 'Admin') 
  {
  
}
else
  {
   $hidelink= 'hidden';
}
  








?>


<!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php" style="color: white; font-family:veltica; font-size:130%"> NDL Equipment</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
          <i class="fa fa-user fa-lg"></i>
        </a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
           <!-- <li><a class="dropdown-item" href="page-user.php"><i class="fa fa-user fa-lg"></i> Profile</a></li> -->
           <li  <?php echo "$hidelink "; ?> ><a class="dropdown-item" href="users.php"><i class="fa fa-user fa-lg"></i> Manage Users</a></li>
            <li    ><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>

          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->



    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>


    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="images/user.png" width="20%" height="20%" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">User:          <?php
 $user=$_SESSION["username"];
  echo "$user";
  
?>      </p>
          <p class="app-sidebar__user-designation">

  







            </p>
        </div>
      </div>

      <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard">
          
        </i><span class="app-menu__label">Dashboard</span></a></li>

        <li <?php echo "$hidelink "; ?> class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Reqistration</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">

            <li  ><a class="treeview-item" href="Eqp_register.php"><i class="icon fa fa-circle-o"></i> Add Equipment</a></li> 


          </ul>
        </li>

        

           <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Master Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">

            <li><a class="treeview-item" href="Master_list.php"><i class="icon fa fa-circle-o"></i>All Equipment </a></li>
            
          </ul>
        </li>


           <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">PDF Reports</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">

            <li><a class="treeview-item" href="equipment_masterlistPDF.php" target="_blank"><i class="icon fa fa-circle-o"></i> All Equipment</a></li>
             <li><a class="treeview-item" href="dept_pdf.php?dept=DATABASE" target="_blank"><i class="icon fa fa-circle-o"></i> Database Department</a></li>
             <li><a class="treeview-item" href="dept_pdf.php?dept=Reception " target="_blank"><i class="icon fa fa-circle-o"></i> Reception Department</a></li>
             <li><a class="treeview-item" href="dept_pdf.php?dept=Virology" target="_blank"><i class="icon fa fa-circle-o"></i> Virology Department</a></li>
             <li><a class="treeview-item" href="dept_pdf.php?dept=Immunology" target="_blank"><i class="icon fa fa-circle-o"></i> Immunology Department</a></li>
             <li><a class="treeview-item" href="dept_pdf.php?dept=Haematology" target="_blank"><i class="icon fa fa-circle-o"></i> Haematology Department</a></li>
             <li><a class="treeview-item" href="dept_pdf.php?dept=MTB" target="_blank"><i class="icon fa fa-circle-o"></i> GeneXpert Department</a></li>
             <li><a class="treeview-item" href="dept_pdf.php?dept=Parasitology" target="_blank"><i class="icon fa fa-circle-o"></i> Parasitology Department</a></li>
             <li><a class="treeview-item" href="dept_pdf.php?dept=Reagent_Preparation " target="_blank"><i class="icon fa fa-circle-o"></i> Reagent Preparation Room</a></li>
             <li><a class="treeview-item" href="dept_pdf.php?dept=COVID-19" target="_blank"><i class="icon fa fa-circle-o"></i> COVID-19 Department</a></li>



          </ul>
        </li>



      </ul>
    </aside>


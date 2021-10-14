<?php
$con = @mysqli_connect("localhost","root","",equipment);
  if(!$con)
	  {
	  die(mysqli_error());
	  }
mysqli_select_db($con,"equipment");
?>
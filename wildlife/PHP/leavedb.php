<?php
session_start();
$id=$_SESSION['user'];
$con = $con = mysqli_connect("127.0.0.1","root","","wildlife_organisation");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,"wildlife_organisation");
$sql="SELECT * FROM leave_request";
$records=mysqli_query($con,$sql);
$num=mysqli_num_rows($records); 
$num++;

if($_POST['from']>$_POST['to'])
{
  echo "The details entered are invalid!!";
  header("refresh:20;url=../html/employee/leave.php");
}
else{
  $sql="INSERT INTO leave_request (leave_id,employee_id,from_date,to_date,place,status) VALUES('$num','$id','$_POST[from]','$_POST[to]','$_POST[place]','0')";
  if (!mysqli_query($con,$sql))
  {
    die('Error: ' . mysqli_error($con));
  }
  echo "leave applied successfully";
  header("refresh:2;url=../html/employee/leave.php");
}

?>

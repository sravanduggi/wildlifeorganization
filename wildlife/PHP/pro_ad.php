<?php
session_start();
$id=$_SESSION['user'];
$pr_id=$_REQUEST['proj-id'];
$pr_name=$_REQUEST['proj-name'];
$man_id=$_REQUEST['manager-id'];
$funds=$_REQUEST['funds'];
$due=$_REQUEST['due'];
$con = $con = mysqli_connect("127.0.0.1","root","","wildlife_organisation");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,"wildlife_organisation");

$sql="INSERT INTO projects (project_id,project_name,project_manager,funds,due_date) VALUES('$pr_id','$pr_name','$man_id','$funds','$due')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Project assaigned successfully";
header("refresh:2;url=../html/admin/project_admin.html");

?>

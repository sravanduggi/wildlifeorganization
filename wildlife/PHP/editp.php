<?php

session_start();
$conn = mysqli_connect("127.0.0.1","root","","wildlife_organisation");

mysqli_select_db($conn,"wildlife_organisation");

$op=$_REQUEST['O_password'];
$np=$_REQUEST['N_password'];
$emp_id=$_SESSION['user'];

$sql="SELECT password from employee where Employee_id=$emp_id";

$record=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($record);
$check=$row['password'];
if($check==$op){
    $sql="UPDATE employee SET password='$np' where Employee_id=$emp_id ";
    if(mysqli_query($conn,$sql)){
            echo "Record Updated Successfully";
            header("refresh:2; url=./session_end.php");
        }
    else{
        echo "Error: ".mysqli_error($conn);
    }
}
else{
    if($emp_id>20000){
        echo('<br><br> <h1 align="center">Password &nbsp entered &nbsp is invalid');
        header("refresh:3; url=../html/employee/profile.php");
    }
    else{
        echo('<br><br> <h1 align="center">Password &nbsp entered &nbsp is invalid');
        header("refresh:3; url=../html/admin/admin_profile.php");   
    }
}
?>
<?php

session_start();
$conn = mysqli_connect("127.0.0.1","root","","wildlife_organisation");

mysqli_select_db($conn,"wildlife_organisation");

$phn=$_REQUEST['phno'];
$emp_id=$_SESSION['user'];
$_SESSION['ph_no']=$phn;

    $sql="UPDATE employee SET Phone_no=$phn where Employee_id=$emp_id ";
    if(mysqli_query($conn,$sql)){
        echo "Record Updated Successfully";
        header("refresh:2; url=../html/employee/profile.php");
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
?>
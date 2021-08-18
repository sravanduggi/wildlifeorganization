<?php

session_start();
$conn = mysqli_connect("127.0.0.1","root","","wildlife_organisation");

mysqli_select_db($conn,"wildlife_organisation");

$stat=$_REQUEST['appr'];
$lev_id=$_SESSION['l_id'];

if($stat=="yes")
{
    $sql="UPDATE leave_request SET status=1 where leave_id=$lev_id ";
    if(mysqli_query($conn,$sql)){
        echo "Record Updated Successfully";
        header("refresh:2; url=../html/admin/leave_approval.php");
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
}
else{
    $sql="UPDATE leave_request SET status=-1 where leave_id=$lev_id ";
    if(mysqli_query($conn,$sql)){
        echo "Record Updated Successfully";
        header("refresh:2; url=../html/admin/leave_approval.php");
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
}
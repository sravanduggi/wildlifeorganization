<?php

session_start();
$con = mysqli_connect("127.0.0.1","root","","wildlife_organisation");

mysqli_select_db($con,"wildlife_organisation");

$user=$_REQUEST['user'];
$_SESSION['user']=$user;
$pwd=$_REQUEST['password'];
$typeofuser=$_POST['tou'];
$_SESSION['login']='no';

$sql="SELECT * FROM employee";

$records=mysqli_query($con,$sql);
$f = 0;

while($rowvalue=mysqli_fetch_array($records))
{	

	if($rowvalue['Employee_id']==$user && $rowvalue['password']==$pwd)
	{
		if(($typeofuser=="employee" && $user>20000) || ($typeofuser=="admin" && $user<20000))
		{
			echo("redirecting...");
			$_SESSION['login']='yes';
			$_SESSION['name']=$rowvalue['Employee_name'];
			$_SESSION['salary']=$rowvalue['Salary'];
			$_SESSION['d_id']=$rowvalue['department_id'];
			$_SESSION['ph_no']=$rowvalue['Phone_no'];
			if($typeofuser=="employee")
			{
				header("refresh:2; url=../html/employee/profile.php");
				$f = 1;
				break;
			}
			else
			{
				header("refresh:2; url=../html/admin/admin_cover.html");
				$f = 1;
				break;
			}
		}
		else
		{
			echo('<br><br> <h1 align="center">ENTER &nbsp VALID &nbsp DETAILS');
			header("refresh:3; url=./session_end.php");
			$f=1;
			break;
		}
	}
}

if($f==0)
	{
			echo('<br><br> <h1 align="center">INVALID &nbsp USERNAME &nbsp OR &nbsp PASSWORD <br><br> Enter correct details</h1>');
			header("refresh:3; url=./session_end.php");
	}

?>

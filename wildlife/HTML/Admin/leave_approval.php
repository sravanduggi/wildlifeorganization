<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/admin_employee.css" />
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul class="nav-links">
                <li class="ele">
                    <a href="./admin_cover.html">Home</a>
                </li>
                <li class="ele">
                    <a href="./admin_profile.php">Profile</a>
                </li>
                <li class="ele">
                    <a href="./admin_proj.php">Project</a>
                </li>
                <li class="ele">
                    <a href="../../php/session_end.php">Logout</a>
                </li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
    <section>
        <div class="profile-info">
            <div class="inbox info">
                <div class="display">
                    <table>
                        <tr style="font-size: 1.5rem; color: #09e640;">
                            <td colspan="4">Leave Status</td>
                        </tr>
                        <tr id="table-header">
                            <td>Employee ID</td>
                            <td>From Date</td>
                            <td>To Date</td>
                            <td>Place</td>
                            <td>Status</td>
                        </tr>
                        <?php
                            session_start();
                            $con = mysqli_connect("127.0.0.1","root","","wildlife_organisation");
                            mysqli_select_db($con,"wildlife_organisation");

                            $id=$_SESSION['user'];
                            $no=$_SESSION['d_id'];
                            $sql="SELECT Employee_id FROM employee where department_id=$no";
                            $records=mysqli_query($con,$sql);

                            while($row=mysqli_fetch_array($records))
                            {
                                $eid=$row['Employee_id'];
                                $_SESSION['lemp_id']=$eid;

                                $sql="SELECT * FROM leave_request where employee_id=$eid and status=0";
                                $records1=mysqli_query($con,$sql);
                                if(mysqli_num_rows($records1) > 0)
                                {
                                    while($rowvalue=mysqli_fetch_array($records1))
                                    {	
                                        $_SESSION['l_id']=$rowvalue['leave_id'];
                                        echo '<tr id="new leave">';
                                        echo '<td id="from">'.$rowvalue['employee_id'].'</td>';
                                        echo '<td id="from">'.$rowvalue['from_date'].'</td>';
                                        echo '<td id="to">'.$rowvalue['to_date'].'</td>';
                                        echo '<td id="place">'.$rowvalue['place'].'</td>';
                                        echo '<td id="status">';
                                        echo '<form method="post" action="../../php/approval.php">';
                                        echo '<input type="radio" name="appr" id="check" value="yes" /><span id="yn">Y</span>';
                                        echo '<input type="radio" name="appr" id="check" value="no" /><span id="yn">N</span>';
                                        echo '<input type="submit" value="S" class="btn btn-full" />';
                                        echo '</form>';
                                        echo '</td>';
                                        echo "</tr>";
                                    }
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="../../js/app.js"></script>
</body>

</html>
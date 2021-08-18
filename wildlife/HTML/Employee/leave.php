<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/leave.css" />
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul class="nav-links">
                <li class="ele">
                    <a href="./profile.php">Profile</a>
                </li>
                <li class="ele">
                    <a href="./project.php">Project</a>
                </li>
                <li class="ele">
                    <a href="./leave.php">Leave</a>
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
        <div class="out-box">
            <div class="box leave-box">
                <form method="post" action="../../php/leavedb.php" class="login">
                    <div class="form">
                        <input type="date" name="from" min="2020-05-01" autocomplete="off" required id="from"/>
                        <label for="from" class="label-name">
                <span class="content-name date">From :</span>
              </label>
                    </div>
                    <br />
                    <div class="form">
                        <input type="date" name="to" min="2020-05-01" autocomplete="off" required id="to" />
                        <label for="to" class="label-name">
                <span class="content-name date">To :</span>
              </label>
                    </div>
                    <br />
                    <div class="form">
                        <input type="text" name="place" autocomplete="off" required />
                        <label for="place" class="label-name">
                <span class="content-name">Place :</span>
              </label>
                    </div>
                    <br />
                    <div class="existed">
                        <a href="./leave.php" id="old-user">Reset ..!</a>
                    </div>
                    <br />
                    <div class="login">
                        <input type="submit" value="submit" id="submit" class="btn btn-full" />
                    </div>
                </form>
            </div>
            <div class="box">
                <table>
                    <tr style="font-size: 1.5rem; color: #11995a;">
                        <td colspan="3">Leave Status</td>
                    </tr>
                    <tr id="table-header">
                        <td>From Date</td>
                        <td>To Date</td>
                        <td>Status</td>
                    </tr>
                    <?php
                    session_start();
                    $con = mysqli_connect("127.0.0.1","root","","wildlife_organisation");
                    mysqli_select_db($con,"wildlife_organisation");
    
                    $id=$_SESSION['user'];
                    $sql="SELECT * FROM leave_request where employee_id=$id";
                    $stat="pending";
    
                    $records=mysqli_query($con,$sql);
                    while($rowvalue=mysqli_fetch_array($records))
                    {	
                        $stat="pending";
                        if($rowvalue['status']==1)
                        {
                            $stat="approved";
                        }
                        else if($rowvalue['status']==-1)
                        {
                            $stat="rejected";
                        }
                        echo '<tr id="new leave">';
                            echo '<td id="from">'.$rowvalue['from_date'].'</td>';
                            echo '<td id="to">'.$rowvalue['to_date'].'</td>';
                            echo '<td id="status">'.$stat.'</td>';
                        echo '</tr>';
                    }
                  ?>
                    
                </table>
            </div>
        </div>
    </section>
    <script src="../../js/Leave.js"></script>
</body>

</html>
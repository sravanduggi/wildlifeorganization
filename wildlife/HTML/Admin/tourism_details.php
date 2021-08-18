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
                    <a href="./admin_cover.html">HOME</a>
                </li>
                <li class="ele">
                    <a href="./admin_profile.php">Profile</a>
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
                        <tr id="table-header">
                            <td>HOSPOT ID</td>
                            <td>VISITORS COUNT</td>
                            <td>INCOME</td>
                            <td>EXPENDITURE</td>
                        </tr>
                        <?php
                            session_start();
                            $con = mysqli_connect("127.0.0.1","root","","wildlife_organisation");
                            mysqli_select_db($con,"wildlife_organisation");

                            $id=$_SESSION['user'];
                            $no=$_SESSION['d_id'];
                            $sql="SELECT * FROM hotspot where chairman=$id";
                            $records=mysqli_query($con,$sql);

                            $row=mysqli_fetch_array($records);
                            $hid=$row['hotspot_id'];

                            $sql="SELECT * FROM tourism where hotspot_id=$hid";
                            $records1=mysqli_query($con,$sql);
                            $rowvalue=mysqli_fetch_array($records1);
                            {	
                                echo "<tr>";
                                echo '<td id="hotspot-id">'.$rowvalue['hotspot_id'].'</td>';
                                echo '<td id="visitors">'.$rowvalue['No_of_tourists'].'</td>';
                                echo '<td id="income">'.$rowvalue['income'].'</td>';
                                echo '<td id="expenditure">'.$rowvalue['expenditure'].'</td>';
                                echo "</tr>";
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
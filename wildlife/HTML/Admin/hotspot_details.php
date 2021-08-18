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
                            <td>HOTSPOT NAME</td>
                            <td>CHAIRMAN</td>
                            <td>HQ</td>
                            <td>FUNDING</td>
                        </tr>
                        <?php
                            session_start();
                            $con = mysqli_connect("127.0.0.1","root","","wildlife_organisation");
                            mysqli_select_db($con,"wildlife_organisation");

                            $id=$_SESSION['user'];
                            $no=$_SESSION['d_id'];
                            $sql="SELECT * FROM hotspot where Chairman=$id";

                            $records=mysqli_query($con,$sql);
                            $rowvalue=mysqli_fetch_array($records);
                            {	
                                echo "<tr>";
                                echo '<td id="hotspot-id">'.$rowvalue['hotspot_id'].'</td>';
                                echo '<td id="hotspot-name">'.$rowvalue['hotspot_name'].'</td>';
                                echo '<td id="chairman">'.$rowvalue['Chairman'].'</td>';
                                echo '<td id="hqID">'.$rowvalue['HQ_name'].'</td>';
                                echo '<td id="funding">'.$rowvalue['funding'].'</td>';
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
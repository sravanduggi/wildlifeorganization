<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../css/projects.css" />
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
      <div class="profile-info">
        <div class="box info">
          <div class="display">
            <table>
              <tr id="table-header">
                <td>Project ID</td>
                <td>Project Name</td>
                <td>Project Manager</td>
                <td>Funds</td>
                <td>Due Date</td>
              </tr>
              <?php
                session_start();
                $con = mysqli_connect("127.0.0.1","root","","wildlife_organisation");
                mysqli_select_db($con,"wildlife_organisation");

                $id=$_SESSION['user'];
                $sql="SELECT * FROM projects where project_manager=$id";

                $records=mysqli_query($con,$sql);
                while($rowvalue=mysqli_fetch_array($records))
                {
                    echo "<tr>";
                       echo '<td id="proj-id">'.$rowvalue['project_id'].'</td>';
                       echo '<td id="proj-name">'.$rowvalue['project_name'].'</td>';
                       echo '<td id="proj-manager">'.$rowvalue['project_manager'].'</td>';
                       echo '<td id="funds">'.$rowvalue['funds'].'</td>';
                       echo '<td id="due-date">'.$rowvalue['due_date'].'</td>';
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

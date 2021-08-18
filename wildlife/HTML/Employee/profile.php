<!DOCTYPE html>
<html lang="en">
    
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../css/Profile.css" />
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
        <div class="box">
          <div class="display">
            <table>
              <tr>
                <td>
                  Name :
                </td>
                <td>
                <?php
                  session_start();
                  echo $_SESSION['name'];
                ?>                  
                </td>
              </tr>
              <tr>
                <td>
                  Employee-ID :
                </td>
                <td>
                <?php
                  echo $_SESSION['user'];
                ?>
                </td>
              </tr>
              <tr>
                <td>
                  Department-ID :
                </td>
                <td>
                <?php
                    echo $_SESSION['d_id'];
                ?>
                </td>
              </tr>
              <tr>
                <td>
                  Salary :
                </td>
                <td>
                <?php
                  echo $_SESSION['salary'];
                ?>
                </td>
              </tr>
              <tr>
                <td>
                  Ph.No :
                </td>
                <td>
                <?php
                  echo $_SESSION['ph_no'];
                ?>
                </td>
                <td class="icon-edit-col">
                  <a href="./edit_number.html" id="profile-edit">
                    <i class="material-icons edit_icon" id="edit_phno">mode_edit</i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  Password :
                </td>
                <td>
                  <p id="password">******</p>
                </td>
                <td class="icon-edit-col">
                  <a href="./edit_pswrd.html" id="profile-edit">
                    <i class="material-icons edit_icon" id="edit_password">mode_edit</i>
                  </a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>
    <script src="../../js/app.js"></script>
  </body>
</html>

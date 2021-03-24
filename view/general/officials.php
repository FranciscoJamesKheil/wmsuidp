<?php
  session_start();
    $mysqli = new mysqli("localhost","root","","dbwmsuidp") or die($mysqli->error());

    if($mysqli === false) {
      die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IDP Generator | Officials</title>
    <link rel="icon" href="../font/assets/logo/idplogo.png" />
    <link rel="stylesheet" href="./stylesheet/content/header.css" />
    <link rel="stylesheet" href="./stylesheet/content/officials.css" />
    <!--extra style-->
    <link rel="stylesheet" href="../font/fontawesome/css/all.css" />
    <link rel="stylesheet" href="../font/preloader/loader.css" />
  </head>
  <body ondragstart="return false" onselectstart="return false">
    <header class="header">
      <a class="logo">
        <img src="../font/assets/logo/idplogo.png" class="img-logo" />
        <div class="logo-text">
          WMSU
          <p>INDIVIDUAL DAILY PROGRAM</p>
        </div>
      </a>
      <div class="pG">
        <p id="page-title">WMSU Officials</p>
      </div>
      <input type="checkbox" class="menu-btn" id="menu-btn" />
      <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
      </label>
      <ul class="menu">
        <li id="dashboard-mobile">
          <a href="./home.php" id="slide-home">
            <p class="far fa-home"></p>
            Home
          </a>
        </li>
        <li id="dashboard-mobile">
          <a href="./dashboard.php" id="slide-dashboard">
            <p class="far fa-tachometer-alt"></p>
            Dashboard
          </a>
        </li>
        <li id="settings-mobile">
          <div class="dropdown-nav">
            <p class="far fa-cog"></p>
            <span class="nav-title" id="settings">Maintenance Settings</span>
            <hr />
            <div class="dropdown-content-nav">
              <span
                ><a href="./registration.php" id="slide-registration"
                  ><p class="far fa-pen"></p>
                  Registration</a
                ></span
              >
              <span
                ><a href="./matrix.php" id="slide-matrix"
                  ><p class="far fa-cogs"></p>
                  Matrix</a
                ></span
              >
              <span
                ><a class="active" href="./officials.php" id="slide-officials"
                  ><p class="fas fa-users"></p>
                  Officials</a
                ></span
              >
            </div>
          </div>
        </li>
        <li>
          <div class="dropdown-nav">
            <p class="far fa-user-circle"></p>
            <span class="nav-title" id="profile">Account</span>
            <hr />
            <div class="dropdown-content-nav">
              <span
                ><a href="./profile.php" id="slide-profile"
                  ><p class="far fa-user-cog"></p>
                  Profile</a
                ></span
              >
              <br />
              <span
                ><a
                  href="../../index.php"
                  id="slide-sign-out"
                  class="bdr-top-line"
                  ><p class="far fa-sign-out"></p>
                  Logout</a
                ></span
              >
            </div>
          </div>
        </li>
      </ul>
    </header>
    <nav class="side-nav">
      <div class="side-nav-logo">
        <img src="../font/assets/logo/idplogo.png" alt="" />
        <p>WMSU IDP Generator</p>
      </div>
      <ul>
        <a href="./home.php"
          ><li><span class="far fa-home"></span>Home</li></a
        >
        <a href="./dashboard.php"
          ><li><span class="far fa-tachometer-alt"></span>Dashboard</li></a
        >
        <li id="label-settings">Maintenance Settings</li>
        <a href="./registration.php"
          ><li><span class="far fa-pen"></span>Registration</li></a
        >
        <a href="./matrix.php"
          ><li><span class="far fa-cogs"></span>Matrix</li></a
        >
        <a href="./officials.php"
          ><li class="active-sn">
            <span class="fas fa-users"></span>Officials
          </li></a
        >
      </ul>
    </nav>
    <main>
      <!--preloader-->
      <div class="loader">
        <div class="preloadermain">
          <div class="precircle"></div>
          <div class="preloader01"></div>
          <div class="preloader02"></div>
          <div class="preloader03"></div>
          <div class="preloader02"></div>
        </div>
        <div class="preloadermain1">
          <div class="preloader01"></div>
          <div class="preloader02"></div>
          <div class="preloader03"></div>
          <div class="preloader02"></div>
        </div>
        <div class="preloadermain">
          <div class="preloader01"></div>
          <div class="preloader02"></div>
          <div class="preloader03"></div>
          <div class="preloader02"></div>
        </div>
      </div>
      <script src="../font/preloader/loader.js"></script>
      
      <div class="main">
        <div class="main">
          <div id="wmsu-vec">
            <img src="../font/assets/logo/wmsulogo.png" alt="" />
            <p>Western Mindanao State University Officials</p>
          </div>
        </div>
      </div>
      <section>
        <div class="register">
          <form action="./mysql/officials/add-officials.php" method="POST">
            <p id="h1">REGISTER OFFICIALS</p>
            <br />
            <label>First Name:</label>
            <input type="text" name="first-name" autocomplete="off" id="" required/>
            <br />
            <label>M.I (Optional):</label><br />
            <input
              type="text"
              maxlength="1"
              style="width: 3rem; text-transform: uppercase"
              name="middle-initial" autocomplete="off"
              id=""
            />
            <br />
            <label>Last Name:</label>
            <input type="text" name="last-name" autocomplete="off" id="" required/>
            <br />
            <label>Position:</label>
            <input type="text" name="position" autocomplete="off" placeholder="President, etc" id="" required/>
            <br />
            <label>Degree:</label>
            <input type="text" name="degree" autocomplete="off" placeholder="PhD, RN, DNS, etc." id="" required/>

            <div class="btn-add-officials">
              <button type="submit" name="submit" id="reg-off">Register</button>
            </div>
          </form>
        </div>
        <div class="record">
          <table border="1">
            <tr>
              <th colspan="6" id="tag">RECORD</th>
            </tr>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Position</th>
              <th>Degree</th>
              <th colspan="2">Action</th>
            </tr>
              <?php
                //view
                $sql = "SELECT * FROM officials";

                $myData = mysqli_query($mysqli,$sql);
                while($record = mysqli_fetch_array($myData)) { 
                  $oid = $record['officials_id'];
                  $ofn = $record['officials_firstname'];
                  $oln = $record['officials_lastname'];
                  $omi = $record['officials_mi'];
                  $op = $record['officials_position'];
                  $od = $record['officials_degree'];
              ?>
            <tr>
              <td><?php echo $oid ?></td>
              <td><?php echo $oln ?>, <?php echo $ofn ?> <?php echo $omi!=""? $omi.".": $omi?></td>
              <td><?php echo $op ?></td>
              <td><?php echo $od ?></td>
              <td id="tbl-btn">
                <a href="./stylesheet/pop/officials/edit-off.php?GetID=<?php echo $oid; ?>"
                  ><button type="button" id="btn-edit">Update</button></a
                >
              </td>
              <td id="tbl-btn">
                <button type="button" id="btn-del" onclick="openModal('<?php echo $oid ?>')">Delete</button>
              </td>
            </tr>
            <?php 
              } 
              ?>
          </table>
        </div>
      </section>

      <!--DELETE OFFICIAL-->
      <div class="modal-container" id="modal01">
        <br /><br />
        <br /><br />
        <br /><br />
        <div class="modal-content">
          <form action="./mysql/officials/delete-officials.php" method="POST">
            <h2><span class="fas fa-exclamation"></span> Please Confirm:</h2>
            <br />
            <input type="text" value="" id="delete-officials" name="delete-officials" hidden>
            <p>Remove Official</p>
            <div class="matrix-button">
              <button type="button" id="cancel" onclick="closeModal()">
                <span class="fas fa-times"></span> Cancel
              </button>
              <button type="submit" id="submit" name="delete">
                <span class="fas fa-check"></span> Remove
              </button>
            </div>
          </form>
        </div>
      </div>
      <script>
        function openModal(x) {
          document.getElementById("modal01").style.display = "block";
          document.getElementById("delete-officials").value = x;
        }
        function closeModal() {
          document.getElementById("modal01").style.display = "none";
        }
      </script>
      <footer>
        <p>
          <img
            id="img-footer"
            src="../font/assets/logo/wmsulogo.png"
            alt="IDP"
          />All Rights Reserved &copy 2021 WMSU IDP
          <img
            id="img-footer"
            src="../font/assets/logo/idplogo.png"
            alt="IDP"
          />
        </p>
      </footer>
    </main>
    <?php
      mysqli_close($mysqli);
    ?>
  </body>
</html>

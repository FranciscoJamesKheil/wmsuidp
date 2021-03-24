<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IDP Generator | Homepage</title>
    <link rel="icon" href="../font/assets/logo/idplogo.png" />
    <link rel="stylesheet" href="./stylesheet/content/header.css" />
    <link rel="stylesheet" href="./stylesheet/content/home.css" />
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
        <p id="page-title">Home</p>
      </div>
      <input type="checkbox" class="menu-btn" id="menu-btn" />
      <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
      </label>
      <ul class="menu">
        <li id="dashboard-mobile">
          <a class="active" href="./home.php" id="slide-home">
            <p class="fas fa-home"></p>
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
                ><a href="./officials.php" id="slide-officials"
                  ><p class="far fa-users"></p>
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
          ><li class="active-sn"><span class="fas fa-home"></span>Home</li></a
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
          ><li><span class="far fa-users"></span>Officials</li></a
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
      
      <div class="slider">
        <div class="slide_viewer">
          <div class="slide_group">
            <div class="slide">
              <h2>The Western Mindanao State University</h2>
              <br />
              <p>The University of choice</p>
            </div>
            <div class="slide">
              <h2>Introduction about Individual Daily Program</h2>
              <br />
              <p>The Individual Daily Program is a</p>
            </div>
            <div class="slide">
              <h2>Features</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- End // .slider -->

      <div class="slide_buttons"></div>

      <div class="directional_nav">
        <div class="previous_btn" title="Previous">
          <svg
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            viewBox="-11 -11.5 65 66"
          >
            <g>
              <g>
                <path
                  fill="#474544"
                  d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
			c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"
                />
                <path
                  fill="#474544"
                  d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"
                />
              </g>
            </g>
          </svg>
        </div>
        <div class="next_btn" title="Next">
          <svg
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            viewBox="-11 -11.5 65 66"
          >
            <g>
              <g>
                <path
                  fill="#474544"
                  d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"
                />
                <path
                  fill="#474544"
                  d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"
                />
              </g>
            </g>
          </svg>
        </div>
      </div>
      <!-- End // .directional_nav -->
      <script src="../font/jQuery/jquery-3.5.1.min.js"></script>
      <script src="./stylesheet/jQuery/slider.js"></script>
    </main>
  </body>
</html>

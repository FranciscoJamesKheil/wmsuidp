<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/font/fontawesome/css/style.css">
    <link rel="icon" href="./view/font/assets/logo/idplogo.png">
    <link rel="stylesheet" href="./view/font/fontawesome/css/all.css">
    <title>IDP Generator | Log-in</title>
</head>
<body>
    <div class="wrapper">
    <div class="login">
      <center><img src="./view/font/assets/logo/idplogo.png" id="logo" alt=""></center>
      <p class="title">Log in</p>
      <input type="text" placeholder="Username" autocomplete="off" id="username" required/>
      <i class="fa fa-user"></i>
      <input type="password" id="password" placeholder="Password" autocomplete="off" required/>
      <i class="fa fa-key"></i>
      <button type="button" onclick="submit()">
        <i class="spinner"></i>
        <span class="state">Log in</span>
      </button>
    </div>
    </p>
  </div>
  <script type="text/javascript">
    function submit() {
      var uname = document.getElementById("username").value;
      switch(uname) {
        case 'general':
          location.href="./view/general/dashboard.php";
          break;
        case 'admin':
          location.href="./view/admin/dashboard.html";
          break;
        case 'faculty':
          location.href="./view/faculty/dashboard.html";
          break;
        default:
          window.alert("Not yet available ");
          document.getElementById("username").value = "";
          document.getElementById("password").value = "";
          break;
      }
    }
  </script>
</body>
</html>
<!DOCTYPE html>
<html>
<title>Leave application</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
  body,
  html {
    height: 100%;
    font-family: "Times New Roman", Times, serif;
  }

  .bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("abc.jpg");
    height: 98%;
    width: 100%;
  }

  .menu {
    display: none;
  }

  .projectname {
    text-align: center;
    color: black;
    text-shadow: 2px 2px 4px blue;
    font-size: 65px;
    margin-top: 0px;
  }

  .login {
    text-align: center;
    color: yellow;
    text-shadow: 2px 2px 4px red;
    font-size: 20px;
    height: 35px;
    margin-top: 1px;
    ;
    margin-bottom: 1px
  }

  login:hover {
    color: white
  }
</style>

<body>

  <!-- Links (sit on top) -->
  <div class="w3-top">
    <div class="w3-row w3-padding w3-black">
      <div>
        <img style="text-align: center;" src="clg_logo.png" alt="logo" width="1240" height="150">
      </div>
      <p class="login">Select Your Login</p>
      <div class="w3-col s3">

        <a href="principlelogin.php" class="w3-button w3-block w3-black">PRINCIPAL LOGIN</a>
      </div>
      <div class="w3-col s3">
        <a href="hodlogin.php" class="w3-button w3-block w3-black">HOD LOGIN</a>
      </div>
      <div class="w3-col s3">
        <a href="rectorlogin.php" class="w3-button w3-block w3-black">RECTOR LOGIN</a>
      </div>
      <div class="w3-col s3">
        <a href="studentlogin.php" class="w3-button w3-block w3-black">STUDENT LOGIN</a>
      </div>
    </div>
  </div>

  <!-- Header with image -->
  <header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">

    </div>
    <div class="w3-display-middle w3-center">
      <div class="projectname">
        <p><br><br>Online Leave, Bonafide & NightOut Certificate Generator</p>
      </div>
    </div>

  </header>

  <!-- Add a background color and large text to the whole page -->
  <div class="w3-sand w3-grayscale w3-large">

    <!-- Menu Container -->
    <div class="w3-container" id="menu">
      <div class="w3-content" style="max-width:700px">




      </div>
    </div>


  </div>
  <div class="w3-bottom">

    <div class="w3-row w3-padding w3-black">
      <p class="login"> &#169; by coders</p>



    </div>
  </div>



  <!-- Footer -->


  <script>
    // Tabbed Menu
    function openMenu(evt, menuName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("menu");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
      }
      document.getElementById(menuName).style.display = "block";
      evt.currentTarget.firstElementChild.className += " w3-dark-grey";
    }
    document.getElementById("myLink").click();
  </script>

</body>

</html>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("https://m.popkey.co/0a0d8e/YR013.gif");
    min-height: 90%;
}
.error {color: #FF0000;}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button">HOME</a>
    <a href="#menu" class="w3-bar-item w3-button">ARTICLES</a>
    <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#googleMap" class="w3-bar-item w3-button">CONTACT</a>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">

  </div>
  <br>
  <br>
  <br>

  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>BOI BYE!<br></b></span>
  </div>
</header>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">

    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">THE ARTICLES</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey clicked">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-white">FEMINISM</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-white">ACTIVISM</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-white">INTERSSCTIONAL</div>
      </a>
    </div>

    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Domestic Violence/Violence Againist Women</b> <span class="w3-right w3-tag w3-dark-grey w3-round">01/14/2017</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
      <hr>

      <h1><b>How Women Are Protrayed.</b> <span class="w3-right w3-tag w3-dark-grey w3-round">01/14/2017</span></h1>
      <p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
      <hr>

      <h1><b>Women Can Wear Whatever They Want!</b> <span class="w3-right w3-tag w3-dark-grey w3-round">01/14/2017</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p>
      <hr>


    </div>

    <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>We've Come So Far But....</b> <span class="w3-tag w3-grey w3-round"></span> <span class="w3-right w3-tag w3-dark-grey w3-round">01/14/2017</span></h1>
      <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>

      <h1><b>Low Conviction Rate.</b> <span class="w3-right w3-tag w3-dark-grey w3-round">01/14/2017</span></h1>
      <p class="w3-text-grey">Ravioli filled with cheese</p>
      <hr>

      <h1><b>Fetishiziation</b> <span class="w3-right w3-tag w3-dark-grey w3-round">01/14/2017</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
      <hr>


    </div>


    <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Wage Gap</b> <span class="w3-tag w3-grey w3-round"></span><span class="w3-right w3-tag w3-dark-grey w3-round">08/14/2017</span></h1>
      <p class="w3-text-grey">Ask the waiter</p>
      <hr>

      <h1><b>Why We Need Intersectional Feminism!!!</b> <span class="w3-right w3-tag w3-dark-grey w3-round">01/14/2017</span></h1>
      <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
      <hr>

      <h1><b>Female Genital Mutilation </b> <span class="w3-right w3-tag w3-dark-grey w3-round">01/14/2017</span></h1>
      <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
      <hr>


    </div><br>

  </div>
</div>

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">About</h1>
    <p>Welcome to BOIBYE! This website is for care free women that don't care about social standards. The founders, Fahima, Tai, Huda and Alli wanted the users of this website to feel welcomed and feel like they are apart of a community. We created this website because we saw the lack of blogs that were clean cut and straight forward. With this blog, nothing is sugar coated because the world is salty ✨ </p>
    <p><strong>Fahima Mohammed:</strong> Article writer </p>
    <p><strong>Tai Cooper:</strong> Editor <p>
    <p><Strong>Huda Ziyad:</strong> Back end designer </p>
    <p><strong>Alli Lapchis:</strong> Audio selector </p>
    <img src="/w3images/onepage_restaurant.jpg" style="width:100%" class="w3-margin-top w3-margin-bottom" alt="Restaurant">
    <h1><b>Uploading dates</b></h1>

    <div class="w3-row">
      <div class="w3-col s6">
        <p>Monday Blog Posts</p>
        <p>Friday Advice Column Post</p>
        <p>Sunday Whats Hot</p>
      </div>

      </div>
    </div>

  </div>
</div>

<!-- Contact (with google maps) -->
<div id="googleMap" class="w3-grayscale-max" style="width:100%;height:400px;"></div>

<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
    <p> Call us at (206)631-0870 or email us.</p>
    <p><span class="w3-tag">Give Us The Tea☕️</span> We are looking for advocates to speak their truths and send us their thoughts✨.</p>

<!-- <form action="/action.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>

    </form> -->

    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

  </div>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Powered by <a href="file:///Users/twitter/Desktop/2017/finalproject.html" title="boibye.edu" target="_blank" class="w3-hover-text-white">boibye.edu</a></p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(47.606209,-122.332071);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>
<div id="cp_widget_b9cf65e2-00bc-4b6c-845d-f3d24f9f0faf">...</div><script type="text/javascript">
var cpo = []; cpo["_object"] ="cp_widget_b9cf65e2-00bc-4b6c-845d-f3d24f9f0faf"; cpo["_fid"] = "AQMAoCupTnt3";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script><noscript><span>New Gallery 2017/8/14</span></noscript>

<!--

To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<!-- Contact Section -->





</body>
</html>

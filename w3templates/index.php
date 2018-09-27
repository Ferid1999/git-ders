<?php include 'function.php'; ?>
<?php include 'session_timeout.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>


</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1">Logo</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Values</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">News</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Clients</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Partners</a>
    <div style="float: right;">
    <form action="index.php" method="GET">
    
      <input type="submit" name="delete" value="Çıxış" style="background-color:red;color: white;">
      <i class="fa fa-arrow-right" style="color:white; margin-right: 10px;margin-top: 10px; "></i>
    </form>
   </div>
  </div>
    
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar w3-top" style="margin-top: ;">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b><i class="fa fa-bars"></i> Menu</b></h4>
  <a  href="#" onclick="" class="w3-bar-item w3-button w3-hover-purple" ><i class="fa fa-th-large fa-fw w3-margin-right"></i>Şekiller</a>
  <a  href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-blue" ><i class="fa fa-user fa-fw w3-margin-right"></i></a>
  <a  href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-brown" ><i class="fa fa-envelope fa-fw w3-margin-right"></i> CONTACT</a>
  <a  href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-green" ><i class="fa fa-facebook-official w3-hover-opacity"></i> facebook</a>
  <a  href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-green" ><i class="fa fa-instagram w3-hover-opacity"></i> instagram</a>
  <a  href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-green" ><i class="fa fa-twitter w3-hover-opacity"></i> twitter</a>
</nav>
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">
<?php  include 'header.php'; ?> 
<?php  include 'footer.php'; ?> 
</div>
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display=='block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>


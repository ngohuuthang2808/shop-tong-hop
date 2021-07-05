<!DOCTYPE html>
<html>
<title>HOME PAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="image/w3.css">
<style>
* {box-sizing: border-box}
img {vertical-align: middle;}
/* Slideshow container */
.slideshow-container {
 max-width: 1000px;
 position: relative;
 margin: auto;
}
.navbar {
 width: 100%;
 background-color: #555;
 overflow: auto;
}
.navbar a {
 float: left;
 padding: 12px;
 color: white;
 text-decoration: none;
 font-size: 17px;
 width: 25%; /* Four links of equal widths */
 text-align: center;
}
.navbar a:hover {
 background-color: #000;
}
.navbar a.active {
 background-color: #4CAF50;
}
@media screen and (max-width: 500px) {
 .navbar a {
 float: none;
 display: block;
 width: 100%;
 text-align: left;
 }
}
</style>
</head><body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
 <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
 <a href="index.php" class="w3-bar-item w3-button">ATN shop</a>
 <!-- Right-sided navbar links. Hide them on small screens -->
 <div class="w3-right w3-hide-small">
 <a href="ConnectToDB.php" class="w3-bar-item w3-button">View</a>
 <a href="InsertData.php" class="w3-bar-item w3-button">Insert</a>
 <a href="UpdateData.php" class="w3-bar-item w3-button">Update</a>
 <a href="DeleteData.php" class="w3-bar-item w3-button">Delete</a>
 </div>
 </div>
</div>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
 <img class="w3-image" src="image/toys.jpg" alt="Toys" width="1600" height="800">
 <div class="w3-display-bottomleft w3-padding-large w3-opacity">
 <h1 class="w3-xxlarge">ATN toys shop</h1>
 </div>
</header>
</html>

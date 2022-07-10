<html>

<head>

<style>

.header {
  overflow:hidden;
  background-color:#BF2D2D ;
  top: 0;
  width:100%;
  padding: 10px 50px;
  opacity: 0.9;
  color:#EBE9E9  ;

}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 5px 13px 5px 13px;
  text-decoration: none;
  font-size: 15px;
  line-height: 25px;
  border-radius: 4px;
  text-transform: uppercase;
  letter-spacing: 0px;

  /* font-weight:bold; */
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 20px;
  font-weight: bold;
  color:#EDDFDF  ;

}

/* Change the background color on mouse-over */
.header a:hover {

  text-decoration: underline;
  text-underline-offset: 5px;
  text-decoration-color: white;
  -moz-text-decoration-color: white;
  text-decoration-thickness: 2px;

}




/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a.logo {
  font-size: 0px;
  font-weight: bold;
  color:#EDDFDF  ;

}
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the active/current link*/
a.act{
background: white;
color: #BF2D2D;
border-radius:18px;
font-weight: bold;

}
a.logo2{
  background-color: #333;
}
</style>

</head>

<body>
  <div class="header" >
  <!-- <img src="image/logo.png" alt="The Image" width="128px" height="128px"> -->

  <a href="home.php" class="logo" <?php if ($active == 'home') {
    echo "class='logo2'";
}

?>>Logo</a>

    <div class="header-right">

    <a href="home.php"   <?php if ($active == 'home') {
    echo "class='act'";
}

?> >Home</a>

    <a href="why_donate_blood.php"  <?php if ($active == 'why') {
    echo "class='act'";
}
?>>Blood Stories</a>

      <a href="donate_blood.php"  <?php if ($active == 'donate') {
    echo "class='act'";
}

?>>Donate Blood</a>

      <a href="need_blood.php" <?php if ($active == 'need') {
    echo "class='act'";
}
?>>Request Blood</a>

<a href="about_us.php"  <?php if ($active == 'about') {
    echo "class='act'";
}

?> >About Us</a>

      <a href="contact_us.php" <?php if ($active == 'contact') {
    echo "class='act'";
}

?>>Contact Us</a>
    </div>
  </div>

</body>
</html>

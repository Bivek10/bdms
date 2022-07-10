<!DOCTYPE html>
<html lang="en">

<head>
<!--
  <meta charset="utf-8"  http-equiv="refresh" content="5"> -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blood Donation Site</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <div>
          <img src="assets/img/logo.png" alt=""  style="width: 50px; height:240px">
          <br>
          <h8 style="font-size: 12px;">Be the reason for someone's heartbeat.<span>.</span></h8>
         </div>

        <!-- <h1>Blood Donation<span>.</span></h1> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#chefs">Request Blood</a></li>
          <li><a href="#book-a-table">Donate Blood</a></li>

          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <!-- <a class="btn-book-a-table" href="#book-a-table">Login</a> -->
      <a class="btn-book-a-table" href="http://localhost/bdms/admin/login.php"> Login </a>
      <!-- <a class="btn-book-a-table" href="#book-a-table">Request Blood </a>
        -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Donate blood and be the reason of smile to many faces</h2>
          <p data-aos="fade-up" data-aos-delay="100">"And As Once Said By A Great Dj, Avicii,” The Water Is Sweet, But Blood Is Thicker.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Donate Blood</a>
            <a href="https://www.youtube.com/watch?v=Tfwq_vJHwT8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/home_image.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <!-- style="background-image: url(assets/img/about_blood_donation.png) ;" -->
          <div class="col-lg-7 position-relative about-img"  data-aos="fade-up" data-aos-delay="150">
            <img src="assets/img/about_blood_donation.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">

          </div>
          <div class="col-lg-5 d-flex align-items-lg-start" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
            <?php
include '../conn.php';
$sql = $sql = "select * from pages where page_type='aboutus'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['page_data'];
    }
}

?>


            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



<!-- ======= Donor List Section ======= -->

<section id="chefs" class="chefs section-bg">
<div class="section-header">
         <h2>Donors</h2>
         <p>Our <span>Valuable</span> Donors</p>
    </div>

<div class="row">
  <?php
include '../conn.php';
//$sql = "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
$sql = "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
    <div class="col-lg-3 col-sm-4 portfolio-item" ><br>


        <div class="chef-member" style="margin: 30px;" >
              <div class="member-img">
                  <img src="assets/img/personimg.png" class="img-fluid" alt="">

              </div>
              <div class="member-info">
              
                  <h4>Name: <?php echo $row['donor_name']; ?></h4>
                  <h6>Blood Group: <?php echo $row['blood_group']; ?></h6>
                  <h6>Number:  <?php echo $row['donor_number']; ?></h6>
                  <h6>Age: <?php echo $row['donor_age']; ?></h6>
                  <h6>Address<?php echo $row['donor_address']; ?></h6>

                  <button type="button" class="btn btn-outline-danger">Send Request</button>
            </div>

                </div>

</div>
<?php }}?>
</div>
<br>








</section><!-- End Donor List Section -->




    <!-- ======= Request A Table Section ======= -->

    <!-- ======= Donnor A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Donate Blood</h2>
          <p>Give <span>Your Blood</span> For Needy</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/donorimg.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg" >
          <!-- //action="savedata.php" -->
          <!-- id="xxxHH" -->
          <form  method="post"  action="savedata.php" role="form" class="php-email-form1" style="margin-left:50px;" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                <div class="font-italic">Full Name<span style="color:red">*</span></div>
<div><input type="text" name="fullname" class="form-control" required></div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="font-italic">Email Id</div>
<div><input type="email" name="emailid" class="form-control"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="font-italic">Mobile Number<span style="color:red">*</span></div>
<div><input type="text" name="mobileno" class="form-control" required></div>
                </div>

                <div class="col-lg-6 col-md-6">
                <div class="font-italic">Age<span style="color:red">*</span></div>
                 <div><input type="text" name="age" class="form-control" required></div>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="font-italic">Gender<span style="color:red">*</span></div>
                  <div><select name="gender" class="form-control" required>
                  <option value="">Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  </select>
                  </div>
                </div>
                <div class="font-italic">Select Blood Group<span style="color:red">*</span></div>
<div><select name="blood" class="form-control" required>
  <option value=""selected disabled>Select</option>
  <?php
include 'conn.php';
$sql = "select * from blood";
$result = mysqli_query($conn, $sql) or die("query unsuccessful.");
while ($row = mysqli_fetch_assoc($result)) {
    ?>
   <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
  <?php }?>
</select>
</div>
              <div class="form-group mt-3">
              <div class="font-italic">Address<span style="color:red">*</span></div>
<div><textarea class="form-control" name="address" required></textarea></div></div>
              </div>
              <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent.Thank you!</div>
              </div> -->
                 <div class ="text-center"><input type="submit" name="submit" class="btn btn-danger" value="Donate Now" style="cursor:pointer"></div>

              <!-- <div class="text-center"><button type="submit">Donate Now</button></div> -->
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->

    <hr>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <!-- <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div> -->

        <!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
        <!--End Contact Form -->

      </div>f
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Donate Us Blood</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="https://bootstrapmade.com/">xyz</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center" style="margin-bottom: 20px; margin-right: 90px; "><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60dadaa37f4b000ac03a17e3/1f9bec4h5';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>



<!--End of Tawk.to Script-->

<!-- $(document).ready(function () {
  function reload() {
    $("#content").load("notification.php");
  }
  setTimeOut(reload, seconds*1000)
} -->
<script>
    $('#xxxHH').on('submit', function(e){
      console.log("okkkk")
        e.preventDefault();
        console.log("okkkk")
        let formData = new FormData(this);
        formData.append('_token', '{{csrf_token()}}');
        $.ajax({
        url: 'savedata.php',
        type:'POST',
        data: formData,
        error: function(err){
            console.log(err)
        },
        success: function(res){
            console.log(res)
        },
        cache: false,
        contentType: false,
        processData: false
    })
    })
</script>

</body>


</html>
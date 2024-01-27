<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sign-in";
$conn = new mysqli($servername, $username, $password, $dbname);

$data = "data/a real/sign-in.html";

if ($conn->connect_error) {
    die("error: " . $conn->connect_error);
}

$sql = "SELECT * FROM `sign-table`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

} else {
    echo "<script>
            window.location.href = 'localhost/data/a real/sign-in.html';
          </script>";
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>DIV | service</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/Venobox/venobox.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<!-- navigation -->
<section class="fixed-top navigation">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.html"><img src="snapedit_1706041725549-removebg-preview.png" alt="logo" style="width:90px; height:auto;"></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- navbar -->
      <div class="collapse navbar-collapse text-center" id="navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#feature">Feature</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="profile.php">profile </a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mostaql.com/project/create?freelancer=Mohamed_h_tag">Contact</a>
          </li>
        </ul>
        <a href="https://mostaql.com/project/create?freelancer=Mohamed_h_tag" class="btn btn-primary ml-lg-3 primary-shadow">Start Now</a>
      </div>
    </nav>
  </div>
</section>
<!-- service -->
<section class="section-lg service-bg-image position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">Easy to used</h2>
                <p class="mb-100">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>Excepteur sint occaecat cupidatat non proident</p>
            </div>
            <!-- service item -->
            <div class="col-sm-6 mb-4">
                <div class="rounded bg-white p-4 shadow-primary">
                    <i class="ti-layers-alt round-icon blue mb-4"></i>
                    <h4>Awesome design</h4>
                    <p>

                    The latest ideas, designs, codes, and all new tools. Note: You are the one who will upload my site. We can do this for you for free, but this is so that you are in control.

                    </p>
                </div>
            </div>
            <!-- service item -->
            <div class="col-sm-6 mb-4 translate-y-150">
                <div class="rounded bg-white p-4 shadow-primary">
                    <i class="ti-layers-alt round-icon green mb-4"></i>
                    <h4>Easy to customize</h4>
                    <p>All you have to do is tell us what problem you are facing and we will solve it for you with the best solutions and the latest tools, and God willing, the service will be satisfactory to you..</p>
                </div>
            </div>
            <!-- service item -->
            <div class="col-sm-6 mb-4">
                <div class="rounded bg-white p-4 shadow-primary">
                    <i class="ti-layers-alt round-icon orange mb-4"></i>
                    <h4>24 Hours Open</h4>
                    <p>God willing, we will always be at your service at any time if you have a problem or need help, and do not forget to pray for Gaza..</p>
                </div>
            </div>
            <!-- service item -->
            <div class="col-sm-6 mb-4 translate-y-150">
                <div class="rounded bg-white p-4 shadow-primary">
                    <i class="ti-layers-alt round-icon blue mb-4"></i>
                    <h4>Maximum Support</h4>
                    <p>If you have a problem with your site or a specific algorithm, we will be happy to <br> <br> help you and do everything necessary to solve your problem.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- background shapes -->
    <img class="service-bg-1 up-down-animation" src="images/background-shape/feature-bg-2.png" alt="">
    <img class="service-bg-2 left-right-animation" src="images/background-shape/seo-half-cycle.png" alt="">
    <img class="service-bg-3 up-down-animation" src="images/background-shape/team-bg-triangle.png" alt="">
    <img class="service-bg-4 left-right-animation" src="images/background-shape/green-dot.png" alt="">
    <img class="service-bg-5 up-down-animation" src="images/background-shape/team-bg-triangle.png" alt="">
</section>
<!-- /service -->

<!-- footer -->
<footer class="footer-section footer" style="background-image: url(images/backgrounds/footer-bg.png);">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
        <!-- logo -->
        <a href="index.php">
          <img class="img-fluid" src="snapedit_1706041725549-removebg-preview.png" alt="logo">
        </a>
      </div>
      <!-- footer menu -->
      <nav class="col-lg-8 align-self-center mb-5">
        <ul class="list-inline text-lg-right text-center footer-menu">
          <li class="list-inline-item active"><a href="index.php">Home</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="#feature">Feature</a></li>
          <li class="list-inline-item"><a href="about.php">About</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="#pricing">Pricing</a></li>
          <li class="list-inline-item"><a href="profile.php" target="_blank" rel="noopener noreferrer">Profile</a></li>
          <li class="list-inline-item"><a href="https://mostaql.com/project/create?freelancer=Mohamed_h_tag">Message</a></li>
        </ul>
      </nav>
      <!-- footer social icon -->
      <nav class="col-12">
        <ul class="list-inline text-lg-right text-center social-icon">
          <li class="list-inline-item">
            <a class="facebook" href="https://www.facebook.com/people/Mohamed-H-Tag/100094352927526/"><i class="ti-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="twitter" href="https://twitter.com/MOHAMEDTAG716"><i class="ti-twitter-alt"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="linkedin" href="https://mostaql.com/u/Mohamed_h_tag/portfolio"><img style="width:17px; height:17px; " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeN8sMzamr4iaDX3uLOxuls4KrLVrhs3cwSQ&usqp=CAU" alt="moustaql"></a>
          </li>
          <li class="list-inline-item">
            <a class="black" href="https://khamsat.com/user/muhamed_tag"><img style="width:17px; height:auto; " src="https://khamsat.hsoubcdn.com/assets/images/logo-mobile-215fffeb86f5121a190d2551c62feea201ca1b4e0d5ea7feef9f5aa04a55dac4.png" alt="khamsat"></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- venobox -->
<script src="plugins/Venobox/venobox.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>
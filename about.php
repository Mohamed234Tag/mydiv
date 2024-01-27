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
  <title>DIV | about</title>

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
      <a class="navbar-brand" href="index.php">
<img src="snapedit_1706041725549-removebg-preview.png" alt="logo" style="width:90px; height:auto;"></a>
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
            <a class="nav-link page-scroll" href="index.php#feature">Feature</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="index.php#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="index.php#pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mostaql.com/project/create?freelancer=Mohamed_h_tag">Messsage</a>
          </li>
        </ul>
        <a href="https://mostaql.com/project/create?freelancer=Mohamed_h_tag" class="btn btn-primary ml-lg-3 primary-shadow">Start Now</a>
      </div>
    </nav>
  </div>
</section>
<!-- /navigation -->

<!-- about us -->
<section class="section-lg about pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">About us</h2>
      </div>
      <div class="col-lg-12 mb-100">
        <p>We are a large work team consisting of approximately 20 people, all of whom have great experience in the field. We are also interested in learning about all
           software developments every day. God willing, we will reach the largest company in the entire world.</p>
      </div>
      <div class="col-lg-12">
        <!-- about video -->
        <div class="about-video">
          <img class="img-fluid w-100" src="images/about/video-thumb.jpg" alt="video-thumb">
          <a class="venobox play-btn" href="https://www.youtube.com/embed/2yoYxetUrWQ" data-vbtype="iframe"><i class="ti-control-play"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="images/background-shape/green-dot.png" alt="background-shape" class="about-bg-1 up-down-animation">
  <img src="images/background-shape/blue-dot.png" alt="background-shape" class="about-bg-2 left-right-animation">
  <img src="images/background-shape/green-half-cycle.png" alt="background-shape" class="about-bg-3 up-down-animation">
  <img src="images/background-shape/seo-ball-1.png" alt="background-shape" class="about-bg-4 left-right-animation">
  <img src="images/background-shape/team-bg-triangle.png" alt="background-shape" class="about-bg-5 up-down-animation">
  <img src="images/background-shape/service-half-cycle.png" alt="background-shape" class="about-bg-6 left-right-animation">
</section>
<!-- /about us -->

<!-- product -->
<section class="section product">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Our Product</h2>
      </div>
      <div class="col-md-4 col-sm-6 mb-50">
        <a href="https://mostaql.com/project/create?freelancer=Mohamed_h_tag"><img src="https://www.hostpapa.com/blog/app/uploads/2018/11/image8.png" alt="product-img" class="rounded w-100 img-fluid"></a>
      </div>
      <div class="col-md-4 col-sm-6 mb-50">
        <a href="https://mostaql.com/project/create?freelancer=Mohamed_h_tag"><img src="https://149842033.v2.pressablecdn.com/wp-content/uploads/2019/01/free-responsive-html-bootstrap-beautiful-website-template.jpg" alt="product-img" class="rounded w-100 img-fluid"></a>
      </div>
      <div class="col-md-4 col-sm-6 mb-50">
        <a href="https://mostaql.com/project/create?freelancer=Mohamed_h_tag"><img src="https://getstarted.web.com/web-template/img/all/catering-services-new.jpg" alt="product-img" class="rounded w-100 img-fluid"></a>
      </div>
      <div class="col-12 text-center">
        <a href="https://mostaql.com/project/create?freelancer=Mohamed_h_tag" class="btn btn-primary">See More Product</a>
      </div>
    </div>
  </div>

  <!-- our vision -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="section-title">Our Vision</h2>
        <p>Make your site the best and competitive
           against other designs, and be satisfied so that we can achieve great success together.</p>
      </div>
      <div class="col-md-6">
        <img src="images/about/vision.png" alt="vision" class="img-fluid w-100">
      </div>
    </div>
  </div>
</section>
<!-- /our vision -->

<!-- clients -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">

        <section class="section">
  <div class="container">
      <div class="client-logo-slider align-self-center">
          <a href="https://khamsat.com/user/muhamed_tag" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="images-removebg-preview-removebg-preview.png" alt="khamsat"></a>
          <a href="https://mostaql.com/u/Mohamed_h_tag/portfolio" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZ4AAAB6CAMAAAC4AMUdAAAAb1BMVEX///8squLT7fkPpeAAo+AjqOEXpuFkv+n8///u+f1ivunz+/7B5PbI6Pf3/f/t+P3g8/t3xeu33/TZ8PpQuOc5seXm9vyFyu3P6/gvruSo1vGNzO6x3PNxw+vE5vd7xuyg0/BVuueLze6r2PKe1vFTeRDeAAAOhElEQVR4nO1d6WKyOhAtZvmsS2sVtFRsXfr+z3gBEYGcmQxo7a1y/iIxZDL7ZPL0dA28vHZ4abx8Zp6+Ll+6zqZHFfN/Sisdr2ct3hknu+wlHR4QYQfrWCulzdfkWnN8WLzHygQpjNGbofCd4V7Z/KXAWL1qcsks1KZ4qoL5tef7WDjo40rmqxnLZNzM2OAMowa1p9+VEQOjdz8x60fBXAfVlQ4k/PNeXf+cBFUW2dRGzGje66CueG2u5cj/zlIFTehF+XSvmw9N9IMfcN/YmOZCv3vfCZrvZPLtxHVThzpBYL9+9iPuFmN3q29873xblwCB3RdPY5d2Kc2XP/wdd4rEXWrle8cVbTkFxvnDOXxq/v34l9wl9u5e1x7v5xOTxyb50xFinnTQG3zLHcJRPSn3eJTPFyaAye3nIdA8+aC9e9oFYLOrKf9KhMlzFIrvmLUCu73Bx9wfOpCHIECgM+9mjsyGQGJw9ADoQB5CfAUqC4+S5Oltgy64Jvdkns+EeGrebvI594Yr6h6TPRwQvNXrnk7oQJ41YbkdtQvBPb5Be0D8a0+ed8wghekMLPX86Q2+5Q7RgTw4bBMUQTcUcktZa/Xzn3KPQOTxxUQniALqo3gaIuKpPqXQCV3Igyhg4tPDGSCe/v7Zr7hbdCLP0MkoGHWuCZk79LG9T9oRncjz9Nqgj7HVMOp3gz5KkOHrAdGNPE/DUFUKFFQ0rj2dqkrswOg9MUgPLzqS5+npM1bWmMAYo91anOFeq6xUxxirR30mrjs6k+fpabANAxWEa/jz4eQtMjYeJULi8AUo0vKuu8MF5LkapqtYa23+zZH1PU5GJn0a4V1w7/h98syDY8liJgj3TTZ5WWl7KpGMHzCj99vkGYbVkjnbqGecVgyQ1MZ4PAvwl8njWOi1esaDU884Jke6TyDyDPyvXQlDN3xXKbNzg0cPV8/4u+TZgficOnHIEtUzPlj84VfJA6Pb5lRRCkuyKsXCj4CrkWe4XLxP3xcz7jxWEzjvWlSULnBmIuwyuT+La5BnPNnvAq20Uir1UFT4dpBtcRTbDsq8N5GU1W3o/+dxMXlm6ygL4FQN4NSBsRuBk7LFVT2F/gd19jnxkk7f+UeBag1akOcQaQOX0Si18h2FJOp9jyU/zYMt5cAPVfIDuEesfYffpwOMeCH1iB+JKvnJi7ypctPHUj6IPELu+VZEyWGVQNxZSFyzUOyPKUWeh3J9OnPPIPYR50ggJo3dc48XXcmz0oxYq8LGZEqh1z1edCPPcyRhnWI9NXVyvrfcvOhEnoUSsk4xIFHkxvs94GBYPtjd+T0v75PDer3eToCY6UKeT6lgO0ERkbK/GjVYTufJYfuRzCeLC+v3lskm1sra1HG0SkeOZOhAHrdQyguLO0/8wZjb8/wrUipd0BxKa7Pbdk3AzNaBtjWHXsUNX7E9eT7bUyelD86k/bGI9Wwb19czyGMkSo06NKaZI4/eNNoWtCYPdULERx9ocPH5Hncj/KrTk0Sa8sKNUl/t2PpgCP1d161tyfPcziqojAodoF/Mlr4+t6r/+TBchCR3weXBsElMDlZXrm3JQ7mSfuBhm7UG9R/9WK1BEmbNzqK1tIldwoavTvPbyarGnkPOtqqtEyIPE8pcyf0dZ/YG71Z5pc6n6OMFmJuyQ5qom8wsog5sNj5RVBCb8ALIrCu/bUeejoqn+F9KrR/r3IKb1blVIx5WIC/3ckfCBt6Ohf88a2iqVm478lBBzGJgnFs4D8ys8A2rRFf1DmmxZ/Bx2EZisEHGFM/8EmYjBJWftyIP7HVUDJo6A3EUGc0I6fMZoFtgelittp/u2jedLWxTlhi0tYVYDbkUqLCu5BlSEjgV5fvJ0SAcDj4iUhao28XLtjar0E/9xlVTeDnblzWFJm0jJCm9Q5IfJdGw2iYGrjlJHop5VFTPXM++iG8yhl3S62EWlFM1jaOywJlizIOmaS8Caf/PJJxYU9FtyIOZx1jXZV6G+LfqNm1f65u0HjFfgew9OVDSzRQiunO+iuRkLSTfgjwHyDw2hFNpnpA7zdu3stfAuCHga9ILOG6KclfgGWcJYHTDPfIJUdssLcgDPVIqGE0coL9JiWPzm2qbAkyLKiq/wI1AgXUq+9iYTOJ5hyAPDPAzIUrYneIW/Q3cNFJFpqIcE7FnXrrGr/IxHQf1W+Ta6rodiciDeR2VBbLZF5h4sIL1TbEUVZu+ztBU3YlWPD3UypHYj7BBgxi60bwDxd8dOGEHOfcg2WbZbNQbeENSBpSEWfN/88b/dLpJf6TUzjHWwUTPrTKRAsWNNPeyQA4JVTff/MFKY3XY/GQx97gte72G2BARdMu+kmJiyijbjqb+664w3lOfq6E60ETLTwKGG7ZXRLudQ70h+IEjdp4zUtHW3Y/ILYXkAY3avNkX0ObX+Dr2VwNc9XYJVVRN50YcBXYlKcdBDU2gm+8Rbcb4Qlg18UZ69EemWc/fsUZBNdbwl0D1+Nu3gi/wtOStK1BjsQpa1v1eXRVwSLucPwnItlqI+AQuY58FI+JwtIus5qyHanRmT4XDjA5hJLiAmDwg7+yPAWxbOBk5mrYsYXs0AzO6krdhtQsS0cCthhurXNDo4ySFnicrJsZoS65+ITtIOtqmDjF5XJ8K7ro6gDHOtyNzFKhGHJo0v7Yqn0Af57N2GSDWAm6P8w/lUPqtIXDnMfnbcv8S4TDjlT9S8oD+1EqQHnNHtwfm564jCHWVu1UqGXqkXco+s6gTLaqcoxx8FYLFOVAirozPEKc4Iq/3ICUPMGQkBYGuYciabqBuVLvhRTCXSqCK1S6oMBWE3KiGtUQyZ0wUzZ60D+6bbwXNiaXkQWLKPzoo9TRcvhcoOCB6AAucoxG8dgGfi9QbKvDCcymwIe6VOL4AG3iKCiql5HEPDIjCm66eZkvYkaPkKm7AAmcZiE42nJcVOIcgn/CMzTauCGMD+acYG9FOVhOGyIPKV9zjNqLxXc+H6zf+gjxKV3siFuC1SykgEWt9OH/wAdeav9gIM1wuYaBsU6KasNuTh6nzFNpVIF1/ZgEUGiwDfTAg6tIft0PliwhwuiA3n9CUhIljKXmQzBAM78ohTrihnQ9mg1igtAdBlOos5WUBUXiLinc34gh9ZpQgiSpMfEnJA0wDLaifcaOinGkgs6sgC5RGPstasoAoFEa+W42wAZARFVFbel+OlDzAIJKk1tyNA0Q994Fg0/IswLKWLCAKUyd+KxgGUVO1B0S2uOgCkQf6M8DXYBa6ACAqDKEUQFLAVVUsC/CsJQuIIi0vSYSgdGiqOpEfIG2vKiaPu3QCwx3MjOM5wBbAi2VZADmUZ9ZCbOGuFLpYUqIr0H+nuxEFHqU3SojJAwSP/zpFsFsZjQWuQxXaVWcWQDZxy4Ao0hWC+OITFKxmi7aTRG3nEJMHiBSuQCwHsCe4bYhaGYAaQZYFrhAQRUUVsu2ONs4GLLG8YElMHlS24mMflIRgakFA9g7sM+S7nlngCgFR5EPIDhyD08pmB6YkuVn5CNRTB08FTNqT+kRlYpxlgL7Oda54FmDVl8xwh/k89kNPQNnhEGlt8RFMOXmQWc960mPoPjCpQcRs7gZgWQBFy9oGRJGlJZNGOOEPyCMuJ5OTBwbZm+VCVaDaFNbaQxaTq5JZFoAB0dJWRIa7G8RAPCA70wr7ACHyiDubINuK2OAwZk77AzBwxfX0QBYT+D3yXUuiXyMg2p17kFiMLtI9IAZCFWsAAzFoFpiXGOO6Lk6GCy0mlgWgw396KAyIIjEh8/IRYSMgs+WWG7LHiJ/iNh2BfgNG/ATnd1mhi5YF5J6Q8i9Z4AoBUfwzkaOCE1HIYxT6PcBcBsZSASKHaExTAi12RBmS5k5Cy+wq3ndFAdFySwgrRKFpKCrdR3J3hAxSaSd34GTT1jJVsW+s2Z434cucPBfOG5SygCjvu14hIIpjC1wBSwlU5rCCpoYw5oYEOS2AgGFavGO1+bc+JMn2jW6d4csQygKi0Hc9PYTapVRf0gpRtMq+4tYMSPqntg0QlrSEqgF9jtkvBgSoC7GP75msCRBX2Wo25MgpFnDvNd9YoLr6YFY8RPVkdnJ6FU3pzZ3SAlk1krABzIp+YnEs6tGAS0gUhe49J3wjZ5C9gQ1CboK23R/gv7CCmCgsKZjhIKHEkbq4Cv+BoLzGFmzumFnkSCdITtledsDoseANxCCL4qg8kbr0HI3KIDtO1+MIX74UHh3Nox6wa603mUlcTd4Dwxh2v+Oj6EdHD0ZQPN1IZj3vtAOrzvEZ+4JFcMsB93RwBa17xfQwdDcWogNCkctAGcQUiq7+6dSN5NFhqJbpWLKdY2vQgUmpF+Eg13jUU6cLDKy9fd5RFwqcrD2iY3c6HspnfveCrStU1ExxvOzJ1TyHGsiOINZu6/GI2fpi7/+RkR0trYi46ZcmV7NSyUQkYzJYHW4/8xGHs8ma7rbWQwZjdbzZJvPksAqJINMR1fQJDBWWAyqlbX6xm+8wfg8JjuFfNv7bKHAlz2b3+B00kgYdW8P1+CE0D9PJ+oX1uA1sM4Q67PXK/wcgAkQ5Pz1uDoPy9p17X/a4MvBRRyr244cFSd0ena9bIQqlutJHfzNFGo+LxahTgAX2abqAPuTliA8PohsLB8MVGba+dy8LI0mPOj4gVm33u1HsEfuZrJv1GVTWoUeOeTsFpEJfN5ZNGwYy1K2iPQq8iq6fPq2moDx3YsQD2viXb5r8CxDfr2RjWZd74YDW08enxxFL9ra3E3xXK1UHfPMOaKxy7mrrQWAa+lSQca8K4vC64ryq7Kq8h7oc/GK875izF0apfev7mec7nH/Lznvsb3EXyH3hNb/0F+x0pUfCDlMNDCerqLgyu0AWvRkdenugGxaHkcqux6ssp473k4suNh9MPlabURiGu9HXNpn2Xs5lWE6T/ebfLgxHm6/tZOBTOP8BzcfYK1C6oLEAAAAASUVORK5CYII=" alt="moustaql"></a>
          <a href="https://baaeed.com/u/Free_Palestine" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="image1.png" alt="client-logo"></a>
          <a href="https://picalica.com/u/mohamed_tag" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="data:image/png;base64,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" alt="client-logo"></a>
          <a href="https://www.fiverr.com/mohamedtag316?up_rollout=true" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="Fiverr-Logo.png" alt="client-logo"></a>
      </div>
  </div>
</section>
      </div>
    </div>
  </div>
</section>
<!-- /clients -->
</section>
<!-- /product -->



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
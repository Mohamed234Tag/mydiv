<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sign-in";

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// التحقق من أن البيانات تم تقديمها من النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // التحقق من وجود البيانات قبل استخدامها
    $newName = isset($_POST["contact_name"]) ? $_POST["contact_name"] : "";
    $newMail = isset($_POST["contact_email"]) ? $_POST["contact_email"] : "";
    $newPass = isset($_POST["contact_message"]) ? $_POST["contact_message"] : "";

    // تحديث البيانات
    $sql = "UPDATE `sign-table` SET Name = '$newName', Mail = '$newMail', Password = '$newPass'";

    // تنفيذ التحديث
    if ($conn->query($sql) === TRUE) {

    } else {
        echo "حدث خطأ أثناء تحديث البيانات: " . $conn->error;
    }
} else {

}
$sql = "SELECT Name FROM `sign-table`";

$result = $conn->query($sql);

// التحقق من نجاح الاستعلام
if ($result) {
    // استرجاع البيانات
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data = $row["Name"];
            // يمكنك استخدام $data كما تشاء هنا
            // ... الشيفرة الأخرى التي تستخدم $data ...
        }
    } else {
        echo "لا توجد نتائج";
    }
} else {
    echo "حدث خطأ في الاستعلام: " . $conn->error;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css1/all.min.css" />
    <link rel="stylesheet" href="css1/bootstrap.min.css" />
    <link rel="stylesheet" href="css1/templatemo-style.css" />
    <title>DIV | profile</title>
  </head>
  <body>
    <!-- Welcome Section -->
    <section id="tmWelcome" class="parallax-window" data-parallax="scroll" data-image-src="img/mini-profile-bg-01.jpg">
      <div class="container-fluid tm-brand-container-outer">
        <div class="row">
          <div class="col-12">
            <div class="ml-auto mr-0 tm-bg-black-transparent text-white tm-brand-container-inner">
              <div class="tm-brand-container text-center">
              <?php 
    echo '<h1 class="tm-brand-name">Welcome ' . $data . '</h1>';
?>
                <p class="tm-brand-description mb-0">In your profile</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tm-bg-white-transparent tm-welcome-container">
        <div class="container-fluid">
          <div class="row h-100">
            <!-- Welcome Text -->
            <!-- White transparent bg -->
            <div class="col-md-7 tm-welcome-left-col">
              <div class="tm-welcome-left">
                <h2 class="tm-welcome-title">Welcome  
                
                <?php
                      echo $data ." ". "in";
                ?>
                
                Profile Page</h2>
                <p class="pb-0">
                Here you can edit your data and write your own notes
                turpis. </p>
              </div>
            </div>
            <!-- Brown bg -->
            <div class="col-md-5">
              <div class="tm-welcome-right">
                <i class="fas fa-4x fa-address-card p-3 tm-welcome-icon"></i>
                <p id="editableContent" oninput="saveContent()"  class="mb-0">
                  Please spread a word about templatemo website. Anyone can download free Bootstrap CSS templates.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Welcome section -->

    <!-- Portfolio section -->
    <section id="tmPortfolio">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="tm-portfolio-item">
              <div class="tm-portfolio-name text-white tm-bg-green">
              Note 1
              </div>
              <div class="tm-portfolio-description">
                <h3 class="tm-text-green">
              
                  <span class="tm-title-small"></span>
                </h3>
                <p class="mb-0" contenteditable="true" id="editableContent2" oninput="saveContent2()">
        
                </p>
              </div>
            </div>

            <div class="tm-portfolio-item">
              <div class="tm-portfolio-name text-white tm-bg-orange">
              Note 2
              </div>
              <div class="tm-portfolio-description">
                <h3 class="tm-text-orange">
      
                  <span class="tm-title-small"></span>
                </h3>
                <p class="mb-0" contenteditable="true" id="editableContent3" oninput="saveContent3()">
                  
                </p>
              </div>
            </div>

            <div class="tm-portfolio-item">
              <div class="tm-portfolio-name text-white tm-bg-blue">
                Note 3
              </div>
              <div class="tm-portfolio-description">
                <h3 class="tm-text-blue">
                 
                  <span class="tm-title-small"></span>
                </h3>
                <p class="mb-0" contenteditable="true" id="editableContent4" oninput="saveContent4()">
                  
                </p>
              </div>
            </div>

            <div class="tm-portfolio-item">
              <div class="tm-portfolio-name text-white tm-bg-dark-gray">
                Note 4
              </div>
              <div class="tm-portfolio-description">
                <h3 class="tm-text-dark-gray">
              
                  <span class="tm-title-small">
                  
                  </span>
                </h3>
                <p class="mb-0" contenteditable="true" id="editableContent5" oninput="saveContent5()">
               
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End portfolio section -->

    <!-- Contact section -->
    <div id="tmContact" class="parallax-window" data-parallax="scroll" data-image-src="img/mini-profile-bg-02.jpg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="tm-contact-items-container">
              <div class="tm-contact-item">
                <i class="fas fa-5x fa-briefcase tm-contact-item-icon"></i>
                <p class="mb-0">
                  Quisque venenatis viverra ultrices. Lorem ipsum dolor sit
                  amet. Nullam sit amet tempor nisl.
                </p>
              </div>
              <div class="tm-contact-item">
                <i class="fas fa-5x fa-building tm-contact-item-icon"></i>
                <p class="mb-0">
                  Integer id malesuada ligula. Cras in fringilla nibh, sed
                  semper turpis. Aliquam efficitur nisl nec.
                </p>
              </div>

              <div class="tm-contact-item">
                <i class="fas fa-5x fa-balance-scale tm-contact-item-icon"></i>
                <p class="mb-0">
                  Commodo id ullamcorper ac, dignissim at sapien. Nullam leo
                  massa, varius ac massa et, tincidunt imperdiet.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <form
              method="POST"
              id="tmContactForm"
              class="tm-bg-white-transparent"
            >
              <div class="form-group">
                <input
                  type="text"
                  id="contact_name"
                  name="contact_name"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Name"
                  required
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  id="contact_email"
                  name="contact_email"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Email"
                  required
                />
              </div>
              <div class="form-group">
                <textarea
                  rows="4"
                  id="contact_message"
                  name="contact_message"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Message"
                  required
                ></textarea>
              </div>
              <div class="text-center">
                <button
                  type="submit"
                  class="btn tm-btn-submit rounded-0 text-white"
                >
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- row -->
        <div class="row">
          <footer class="col-12">
            <p class="text-center tm-copyright-text">
            Copyright 2019 Mini Profile Page 
            
            - Design: <a rel="nofollow" href="https://www.facebook.com/templatemo">TemplateMo</a></p>
          </footer>
        </div>
      </div>
      <!-- container -->
    </div>
    <!-- section -->
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
      function detectMsBrowser() {
        using_ms_browser =
          navigator.appName == "Microsoft Internet Explorer" ||
          (navigator.appName == "Netscape" &&
            navigator.appVersion.indexOf("Edge") > -1) ||
          (navigator.appName == "Netscape" &&
            navigator.appVersion.indexOf("Trident") > -1);

        if (using_ms_browser == true) {
          alert(
            "Please use Chrome or Firefox for the best browsing experience!"
          );
        }
      }
      function setBrandMarginTop() {
        var bottomContainerHeight = $(".tm-welcome-container").height();

        $(".tm-brand-container-outer").css({
          "margin-top": -bottomContainerHeight + "px"
        });
      }

      $(function() {
        setBrandMarginTop();
        detectMsBrowser();

        // Handle window resize event
        $(window).resize(function() {
          setBrandMarginTop();
        });
      });


      window.onload = function() {
    var savedContent = localStorage.getItem("editableContent");
    if (savedContent) {
        document.getElementById("editableContent").innerHTML = savedContent;
    }

    savedContent = localStorage.getItem("editableContent2");
    if (savedContent) {
        document.getElementById("editableContent2").innerHTML = savedContent;
    }

    savedContent = localStorage.getItem("editableContent3");
    if (savedContent) {
        document.getElementById("editableContent3").innerHTML = savedContent;
    }

    savedContent = localStorage.getItem("editableContent4");
    if (savedContent) {
        document.getElementById("editableContent4").innerHTML = savedContent;
    }

    savedContent = localStorage.getItem("editableContent5");
    if (savedContent) {
        document.getElementById("editableContent5").innerHTML = savedContent;
    }
};

function saveContent() {
    var content = document.getElementById("editableContent").innerHTML;
    localStorage.setItem("editableContent", content);
}

function saveContent2() {
    var content = document.getElementById("editableContent2").innerHTML;
    localStorage.setItem("editableContent2", content);
}

function saveContent3() {
    var content = document.getElementById("editableContent3").innerHTML;
    localStorage.setItem("editableContent3", content);
}

function saveContent4() {
    var content = document.getElementById("editableContent4").innerHTML;
    localStorage.setItem("editableContent4", content);
}

function saveContent5() {
    var content = document.getElementById("editableContent5").innerHTML;
    localStorage.setItem("editableContent5", content);
}

    </script>
  </body>
</html>
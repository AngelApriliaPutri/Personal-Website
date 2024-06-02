<?php
$koneksi = mysqli_connect("localhost", "root", "r123", "afl2web");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

$query = "SELECT * FROM profileme";
$result = mysqli_query($koneksi, $query);

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

$data_json = json_encode($data);

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About - Angel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="profile.php">Angel</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="profile.php">Home</a></li>
          <li><a class="active" href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>I'm currently a fourth-semester student at Universitas Surabaya. I'm majoring in Information Systems for Business (ISB). Throughout my academic journey, I have actively participated in various extracurricular activities and committees, including being a member of the Student Union. I'm known for my strong time management skills, flexibility at work, and adaptability to new environments. I possess a keen interest in learning and embracing new challenges.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Student at Ciputra University</h3>
            <div class="row">
                <div class="col-lg-6">
                    <ul>
                        <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> <?php echo $data[0]['birthday']; ?></li>
                        <li><i class="bi bi-rounded-right"></i> <strong>Instagram:</strong> <?php echo $data[0]['instagram']; ?></li>
                        <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> <?php echo $data[0]['phone']; ?></li>
                        <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> <?php echo $data[0]['city']; ?></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> <?php echo $data[0]['age']; ?></li>
                        <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong> <?php echo $data[0]['email']; ?></li>
                        <li><i class="bi bi-rounded-right"></i> <strong>Hobby:</strong> <?php echo $data[0]['hobby']; ?></li>
                    </ul>
                </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Angel</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<script>
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "about.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);
            console.log(data); 
            var aboutSection = document.getElementById('about');
            aboutSection.innerHTML = '<h2>About</h2><p>' + data[0].about_text + '</p>'; // Ubah dengan struktur data Anda
        }
    };
    xhr.send();
</script>


</html>
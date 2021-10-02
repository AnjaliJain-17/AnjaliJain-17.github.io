<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FitFirst - Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>FitFirst</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">News</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to FitFirst</h1>
      <h2>Sweat today or bleed tomorrow!</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/img2.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
            <h3>As a fitness consulting company, we provide variety of health, fitness and wellness services online & inperson.</h3>
            <p class="font-italic">
              We help you to achieve your target weight loss goal. Our key features include:
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Customized exercise schedule based your target gaol and BMI.</li>
              <li><i class="icofont-check-circled"></i> Quantified diet nutrition plan.</li>
              <li><i class="icofont-check-circled"></i> World class coaches and trainers.</li>
              <li><i class="icofont-check-circled"></i> Consulting on gym, yoga , pilates and Zumba</li>
            </ul>
            <p>
              Our focus is to educate, motivate and help our clients set and reach their fitness goals!
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Have a look at myraid of key services that we offer below and select the one that best fits your needs!</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">On-Demand Workout videos</a></h4>
            <p class="description">We provide on-demand customized workout videos for busy professionals which include varieties of effective excercises</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">Quantified Diet</a></h4>
            <p class="description">We provide quantified diet to help you meet your target weight loss/gain goals
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">World class trainers</a></h4>
            <p class="description">We connect you to highly qualified trainers who will be there to assist you in all stages of your transformation journey!
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">Yoga, Pilates & Zumba</a></h4>
            <p class="description">We provide consulting on yoga, pilates & zumba for your well being</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">Community Connect</a></h4>
            <p class="description">We connect you to the community of like minded fit people who are towards their transformation journey</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Mental Wellbeing Counselling</a></h4>
            <p class="description">We understand the importance of mental wellbeing hence we provide weekly mental wellbeing counselling sessions both inperson & virtual
          </div>
        </div>



      </div>
    </section><!-- End Services Section -->


    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Need Something? The fitfirst squad is here to help you !</div>

        <div class="row">


          <?php
          // Open the file to read data.
          $fh = fopen('assets/contacts.txt', 'r');
          // define an eampty array
          $data = array();
          // read data
          while ($line = fgets($fh)) {
            // if the line has some data
            if (trim($line) != '') {
              // explode each line data 
              $line_data = explode(';', $line);
              // push data to array
              //array_push($data,array('item'=>trim($line_data[0]),'value'=>trim($line_data[1])));
              echo  '<div class="col-sm-3">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title"><i class="icofont-contact-add"></i><b>' . trim($line_data[0]) . '</b></h5>
           <p class="card-text"><i class="icofont-email"></i>' . trim($line_data[1]) . '</p> 
           <p class="card-text"><i class="icofont-phone"></i>' . trim($line_data[2]) . '</p>
           <p class="card-text"><i class="icofont-address-book"></i>' . trim($line_data[3]) . '</p>
         </div>
       </div>
     </div>';
            }
          }
          fclose($fh);
          ?>
        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
          Copyright @ FitFirst
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<?php include 'common/header.php'; ?>
<body>
<?php include 'common/navbar.php'; ?>
  

  <!-- ======= Welcome Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to FitFirst</h1>
      <h2>Sweat today or bleed tomorrow!</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- #Welcome -->

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
    <section class="call-to-action" id="call-to-action">
      <div class="container">

        <div class="text-center">

          <h3>News</h3>
          <div class="row">
            <div class="col-6 p-4">
              <div class="portfolio-wrap">
                <img src="assets/img/img3.jpeg" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-6" style="margin: auto; color:white">
              Designed for fitness consumers and professionals, FitFirst is a leading publisher of timely, quality information about all things fitness and nutrition
            </div>
          </div>
          <div class="row">
            <div class="col-6 p-4">
              <div class="portfolio-wrap">
                <img src="assets/img/img4.jpeg" class="img-fluid" alt="">
              </div>
            </div>
            <div></div>

            <div class="col-6" style="margin: auto; color:white">
              FitFirst has a community of like-minded individuals in case you need support and extra motivation to reach your fitness goals.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6 p-4">

            <div class="portfolio-wrap">
              <img src="assets/img/img6.jpeg" class="img-fluid" alt="">
            </div>
          </div>


          <div class="col-6" style="margin: auto; color:white">
            FitFirst help people gain muscle size and strength, with a focus on lifting weights, eating a good diet, and living a healthy lifestyle.</div>
        </div>
      </div>
      </div>
      </div>
      </div>
    </section>

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Need Something? The fitfirst squad is here to help you !
        </div>
        <div class="row">
          <?php include 'php/contacts.php'; ?>
        </div>
      </div>
    </section><!-- End Contact Us Section -->


    <section id="secure" class="secure section-bg">
      <div class="container">
        <div class="section-title">
        <h2>Login to Secure Section</h2>
          <form action="php/secure.php" method="post">
            
              <div class="form-group">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="username" required>
              </div>
              <div class="form-group col-12">
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
              </div>  
              <div class="form-group">
              <button type="submit" style="border-radius:10% ;margin-left:5%%;">Login</button>
              <button type="submit" style="border-radius:10%" name="NewUser">New User</button>
              </div>
             
            </div>
          </form>
        </div>
      </div>
    </section>

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
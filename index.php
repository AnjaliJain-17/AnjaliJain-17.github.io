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
    <?php include 'php/aboutUs.php'; ?>
    <?php include 'php/services.php'; ?>
    <?php include 'php/news.php'; ?>
    <?php include 'php/contacts.php'; ?>
  
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
              <button type="submit" style="border-radius:10% ;margin-left:5%;">Login</button>
              <button type="submit" style="border-radius:10%" name="NewUser">New User</button>
            </div>
        </div>
        </form>
      </div>
      </div>
    </section>
     
    <section id="user" class="services section-bg">
      <div class="container">
        <div class="section-title">
          <h2>User Registeration</h2>
          <div class="row">
            <div class="card col-12">
          <form action="php/users.php" method="post">
          <div class="form-group">
                    <div class="row m-1">
                    <div class="col-4">
                    <label for="firstName" class="control-label">First Name</label></div>
                    <div class="col-7">
                        <input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row m-1">
                    <div class="col-4">
                    <label for="lastName" class="control-label">Last Name</label></div>
                    <div class="col-7">
                        <input type="text" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row m-1">
                    <div class="col-4">
                    <label for="email" class="control-label">Email</label></div>
                    <div class="col-7">
                        <input type="text" id="email" placeholder="Email" class="form-control" autofocus>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row m-1">
                    <div class="col-4">
                    <label for="homeAddress" class="control-label">Home Address</label></div>
                    <div class="col-7">
                        <input type="text" id="homeAddress" placeholder="Home Address" class="form-control" autofocus>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row m-1">
                    <div class="col-4">
                    <label for="homePhone" class="control-label">Home Phone</label></div>
                    <div class="col-7">
                        <input type="text" id="homePhone" placeholder="Home Phone" class="form-control" autofocus>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row m-1">
                    <div class="col-4">
                    <label for="cellPhone" class="control-label">Cell Phone</label></div>
                    <div class="col-7">
                        <input type="text" id="cellPhone" placeholder="Cell Phone" class="form-control" autofocus>
                    </div>
                    </div>
                </div>
                <div class="form-group">
              <button type="submit" style="border-radius:10% ;margin-left:5%;">Register</button>
                </div>
        </div>
     
        </div>

        </form>
      </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?php include 'common/footer.php'; ?>
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
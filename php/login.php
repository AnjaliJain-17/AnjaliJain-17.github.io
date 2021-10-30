<html>
<?php include '../common/header.php'; ?>
<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
            <h1 class="text-light"><a href="index.php"><span>FitFirst</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
        </div>
    </div>
</header>

<body style="text-align: center;">


    <div class="container" class="services section-bg" style="margin:10%;">
       
        <div class="row m-1 col-12">
            <div class="card col-4" style="background: #2d6760;color:white;font-size:30px;">
                <div style="text-align:center;">User Login</div>
            </div>
            <div class="card col-8">

                <form action="secure.php" method="post">
                    <div class="form-group">
                        <div class="row m-1">
                            <div class="col-4">
                                <label for="uname" class="control-label">Username</label>
                            </div>
                            <div class="col-7">
                                <input type="text" id="username" name="username" placeholder="Enter User Name" class="form-control" autofocus required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row m-1">
                            <div class="col-4">
                                <label for="password" class="control-label">Password</label>
                            </div>
                            <div class="col-7">
                                <input type="text" id="password" name="password" placeholder="password" class="form-control" autofocus required>
                            </div>
                        </div>
                    </div>
                   
            
            <div class="form-group">
              <button type="submit" style="border-radius:10% ;margin-left:5%;">Login</button>
              <button type="submit" style="border-radius:10%" name="NewUser">New User</button>
            </div>
            </div>
        </div>
        </form>
        <a href="../index.php"><i class="icofont-arrow-left"></i><u>Go Back</u></a>
    </div>
    </div>
  

</body>

</html>
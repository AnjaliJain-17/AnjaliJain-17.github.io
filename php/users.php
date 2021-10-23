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
        <div class="section-title">
            <div class="row m-1 col-12">
                <!-- Search form -->
                <form action="search.php" method="post" style="width: 100%;">
                    <div class="input-group">
                        <input type="search" name="searchText" class="form-control rounded" placeholder="Search users by names, email or phone numbers" aria-label="Search" aria-describedby="search-addon" required />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                </form>
            </div>
        </div>
        <div class="row m-1 col-12">
            <div class="card col-4" style="background: #2d6760;color:white;font-size:30px;">
                <div style="text-align:center;margin-top:50%;">User Registration</div>
            </div>
            <div class="card col-8">

                <form action="registration.php" method="post">
                    <div class="form-group">
                        <div class="row m-1">
                            <div class="col-4">
                                <label for="firstName" class="control-label">First Name</label>
                            </div>
                            <div class="col-7">
                                <input type="text" id="firstName" name="firstName" placeholder="First Name" class="form-control" autofocus required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row m-1">
                            <div class="col-4">
                                <label for="lastName" class="control-label">Last Name</label>
                            </div>
                            <div class="col-7">
                                <input type="text" id="lastName" name="lastName" placeholder="Last Name" class="form-control" autofocus required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row m-1">
                            <div class="col-4">
                                <label for="email" class="control-label">Email</label>
                            </div>
                            <div class="col-7">
                                <input type="email" id="email" name="email" placeholder="Email" class="form-control" autofocus required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row m-1">
                            <div class="col-4">
                                <label for="homeAddress" class="control-label">Home Address</label>
                            </div>
                            <div class="col-7">
                                <input type="text" id="homeAddress" name="homeAddress" placeholder="Home Address" class="form-control" autofocus required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row m-1">
                            <div class="col-4">
                                <label for="homePhone" class="control-label">Home Phone</label>
                            </div>
                            <div class="col-7">
                                <input type="tel" id="homePhone" name="homePhone" pattern="^\d{10}$" placeholder="Home Phone(xxxxxxxxx)" class="form-control" autofocus required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row m-1">
                            <div class="col-4">
                                <label for="cellPhone" class="control-label">Cell Phone</label>
                            </div>
                            <div class="col-7">
                                <input type="tel" id="cellPhone" name="cellPhone" pattern="^\d{10}$" placeholder="Cell Phone(xxxxxxxxx)" class="form-control" autofocus required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" style="border-radius:10% ;margin-left:5%;">Register</button>
                    </div>
            </div>
        </div>
        </form>
        <a href="../index.php"><i class="icofont-arrow-left"></i><u>Go Back</u></a>
    </div>
    </div>

</body>

</html>
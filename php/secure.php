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

    <?php
    extract($_POST);
    if (isset($NewUser)) {
        if (!($file = fopen("../assets/password.txt", "a"))) {
            echo '<p class="danger"> Error! Could not open password file for updation.</p>';
            die();
        }
        fputs($file, "$username,$password\n");
        userAdded($username);
    } else {
        if (!($file = fopen("../assets/password.txt", "r"))) {
            echo '<p class="danger"> Error! Could not open file.</p>';
            die();
        }
        $userVerified = 0;
        while (!feof($file) && !$userVerified) {

            $line = fgets($file, 255);
            $line = chop($line);
            $fields = explode(",", $line);
            if ($username == $fields[0]) {
                $userVerified = 1;
                if (checkPassword($password, $fields) == true) {
                    accessGranted($username);
                } else {
                    invalidPassword();
                }
            }
        }
        fclose($file);
        if (!$userVerified) {
            accessDenied($username);
        }
    }
    function userAdded($name)
    {
        echo '<div style="margin-top:10%; font-size : 30px; color:green;"><b><p class="success"
        color: green;" >Your registration was successful!</p></b></div>';
    }

    function checkPassword($password, $filedata)
    {
        if ($password == $filedata[1]) {
            return true;
        } else {
            return false;
        }
    }

    function accessGranted($name)
    {
        echo '<div style="margin-top:10%; font-size : 30px; color:green;"><b><p class="success"
        color: green;" >Permission has been granted,', $name, '.Enjoy the site!</p></b></div>';
        if (!($file = fopen("../assets/myusers.txt", "r"))) {
            echo '<p class="danger"> Error! Could not open file.</p>';
            die();
        }
        echo '<div style="font-size:20px;"><b>Current users of this website : </b></br></div>';
        while (!feof($file)) {
            $line = fgets($file, 255);
            $line = chop($line);
            echo '<b>', $line, '<b></br>';
        }
    }

    function invalidPassword()
    {
        echo '<div class="danger" style="margin-top:10%; font-size : 30px; color:red;" ><p> Access Denied. You have entered an invalid password.</p></div>';
    }

    function accessDenied($name)
    {
        echo '<div style="margin-top: 10%; font-size : 30px; color:red;"><p> Access Denied!!</p></div>';
    }

    ?>

    <a href="../index.php"><i class="icofont-arrow-left"></i><u>Go Back</u></a>
</body>

</html>
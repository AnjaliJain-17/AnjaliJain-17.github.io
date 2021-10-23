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
    <div class="container" style="margin:10%; text-align:left;">
        <?php
        require_once('dbconnect.php');
        ?>
        <?php
        extract($_POST);
        if (isset($_POST)) {

            $searchText         = $_POST['searchText'];
            if (strpos($searchText, '@') !== false) {
                $sql = "select * from user where email=UPPER(:searchText)";
            } else if (is_numeric($searchText)) {
                $sql = "select * from user where cell_phone=:searchText OR home_phone=UPPER(:searchText)";
            } else {
                $sql = "select * from user where fname=UPPER(:searchText)";
            }

            $stmt = $db->prepare($sql);
            $stmt->bindParam("searchText", $searchText);
            $stmt->execute();
            $result = $stmt->fetchAll();
            echo '<strong>Searched User Details : </strong></br></br>';
            foreach ($result as $row) {
                echo '<strong>Name:  </strong>' . $row['fname'] . ' ' . $row['lname'] . '</br>';
                echo '<strong>Email:  </strong>' . $row['email'] . '</br>';
                echo '<strong>Cell Phone:  </strong>' . $row['cell_phone'] . '</br>';
                echo '<strong>Mobile Phone:  </strong>' . $row['home_phone'] . '</br>';
                echo '<strong>Address:  </strong>' . $row['address'] . '</br></br>';
            }
        } else {
            echo 'No data';
        }
        ?>
    </div>
    <a href="../index.php"><i class="icofont-arrow-left"></i><u>Go Back</u></a>
</body>

</html>
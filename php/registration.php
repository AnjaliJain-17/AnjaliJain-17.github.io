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
<div class="container" style="margin: 10%;">
<?php
require_once('dbconnect.php');
?>
<?php
extract($_POST);
if(isset($_POST)){

	$firstname 		= $_POST['firstName'];
	$lastname 		= $_POST['lastName'];
	$email 			= $_POST['email'];
	$homePhone	    = $_POST['homePhone'];
	$cellPhone 		= $_POST['cellPhone'];
    $homeAddress    = $_POST['homeAddress'];


		$sql = "insert into user (fname,lname,email,cell_phone,home_phone) VALUES(UPPER(?),UPPER(?),UPPER(?),UPPER(?),UPPER(?))";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname." ".$lastname, $lastname, $email, $cellPhone, $homePhone]);
		if($result){
			echo '<div style="color:green;"><h3>'.$firstname." ".$lastname.' : User Successfully saved.</h3></div>';
		}else{
			echo 'There were errors while saving the data.';
		}
}else{
	echo 'No data';
}
?>
</div>
<a href="../index.php"><i class="icofont-arrow-left"></i><u>Go Back</u></a>
</body>

</html>
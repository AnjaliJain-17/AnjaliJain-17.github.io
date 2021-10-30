<?php

extract($_POST);

$product_name = $_POST["Product"];

switch ($product_name) {
	case 'onDemandVideos':
		$product_id = "1";
		break;

	case 'quantifiedDiet':
		$product_id = "2";
		break;

	case 'trainers':
		$product_id = "3";
		break;

	case 'yoga':
		$product_id = "4";
		break;

	case 'pilates':
		$product_id = "5";
		break;

	case 'zumba':
		$product_id = "6";
		break;

	case 'gymConsulting':
		$product_id = "7";
		break;

	case 'communityConnect':
		$product_id = "8";
		break;

	case 'counselling':
		$product_id = "9";
		break;
}


if (array_key_exists($product_id, $_COOKIE)) {
} elseif (count($_COOKIE) >= 5) {

	foreach ($_COOKIE as $key => $value) {
		echo $key;
		echo $value;
		setcookie($key, $value, time() - 1);
		break;
	}
	setcookie($product_id, $product_name, time() + (60 * 60 * 24 * 5), '/');
} else {
	setcookie($product_id, $product_name, time() + (60 * 60 * 24 * 5), '/');
}

//ob_start(); 
switch ($product_name) {
	case 'onDemandVideos':
		header('location: workout-service.php');
		break;

	case 'quantifiedDiet':
		header('location: diet-service.php');
		break;

	case 'trainers':
		header('location: trainer-service.php');
		break;

	case 'yoga':
		header('location: yoga-service.php');
		break;

	case 'pilates':
		header('location: pilates-service.php');
		break;

	case 'zumba':
		header('location: zumba-service.php');
		break;

	case 'gymConsulting':
		header('location: gym-service.php');
		break;

	case 'communityConnect':
		header('location: community-service.php');
		break;

	case 'counselling':
		header('location: counselling-service.php');
		break;
}

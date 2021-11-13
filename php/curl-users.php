
<p>All Users list! : </p>      	
<?php

$curl_handle = curl_init();
curl_setopt($curl_handle, CURLOPT_URL, "http://anjalisjain.me/php/all-users.php");
curl_setopt($curl_handle, CURLOPT_HEADER, 0);
curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
$contents = curl_exec($curl_handle);
curl_setopt($curl_handle, CURLOPT_URL, "https://madhurimadani.com/allThingsVegUsers.php");
$contents = $contents.",".curl_exec($curl_handle);


#echo "<br/>";
curl_close($curl_handle);

foreach (explode(",",$contents) as $value) {
    echo $value."<br/>";
}

?>
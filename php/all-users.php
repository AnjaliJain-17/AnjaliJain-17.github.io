<?php
require_once('dbconnect.php');
?>

<?php
$sql = "select fname,lname from user";
$getUsers = $db->prepare($sql);
$getUsers->execute();
$users = $getUsers->fetchAll();
if(count($users) > 0){
foreach ($users as $user) {
    echo $user['fname'] ." ".$user['lname'].  '<br />';
}
}else{
    echo 'No data';
}
?>

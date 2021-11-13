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
    echo $user['fname'] .  '<br />';
}
}else{
    echo 'No data';
}
?>

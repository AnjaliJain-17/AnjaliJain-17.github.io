<?php
    if(isset($_POST['rating']))
    {
        $rating = $_POST['rating'];
        $review = $_POST['review'];
        $userId ='1';
        $productName = $_POST['productName'];
        $siteId='2';  
        $query = "insert into rating(rating, user_id, product_name, siteID, review) values ($rating, $userId, '$productName' ,$siteId,'$review');";
            $servername = "database-1.cxfl8tcgw2oc.us-west-1.rds.amazonaws.com";
            $username = "root";
            $password = "12345678";
            $dbname="cmpe272";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
             echo "Connection failed..";
             return;
            } else {
                $result = $conn->query($query);
                if($result > 0){
                    echo "Your rating and review submitted successfully. Thank You!";
                  
                }
            }
            $conn->close();
        }
?>
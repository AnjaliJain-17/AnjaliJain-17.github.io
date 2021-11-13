
<p>Users registered in All Things Veg! : </p>      	
    
    <?php
        $ch = curl_init("https://madhurimadani.com/allThingsVegUsers.php");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $userArr = explode(',', $result); 
        foreach ($userArr as $value) {
            echo "$value <br>";
        }
    ?>
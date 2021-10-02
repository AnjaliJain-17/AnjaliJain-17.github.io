<?php
// Open the file to read data.
$fh = fopen('assets/contacts.txt', 'r');
// read data
while ($line = fgets($fh)) {
    // if data is present
    if (trim($line) != '') {
        // explode each line data 
        $line_data = explode(';', $line);
        //dynamically create contact cards based on number on linedata
        echo  '<div class="col-sm-3">
            <div class="card">
         <div class="card-body">
           <h5 class="card-title"><i class="icofont-contact-add"></i><b>' . trim($line_data[0]) . '</b></h5>
           <p class="card-text"><i class="icofont-email"></i>' . trim($line_data[1]) . '</p> 
           <p class="card-text"><i class="icofont-phone"></i>' . trim($line_data[2]) . '</p>
           <p class="card-text"><i class="icofont-address-book"></i>' . trim($line_data[3]) . '</p>
         </div>
       </div>
     </div>';
    }
}
//close file
fclose($fh);
?>

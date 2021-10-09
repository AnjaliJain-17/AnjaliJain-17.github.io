<section id="contact" class="contact section-bg">
  <div class="container">
    <div class="section-title">
      <h2>Contact Us</h2>
      <p>Need Something? The fitfirst squad is here to help you !
    </div>
    <div class="row">

      <?php
      // Open the file to read data.
      $file = fopen('assets/contacts.txt', 'r');
      // read data
      while ($line = fgets($file)) {
        // if data is present
        if (trim($line) != '') {
          // explode each line data 
          $data = explode(';', $line);
          //dynamically create contact cards based on number on linedata
          echo  '<div class="col-sm-3">
            <div class="card">
         <div class="card-body">
           <h5 class="card-title"><i class="icofont-contact-add"></i><b>' . trim($data[0]) . '</b></h5>
           <p class="card-text"><i class="icofont-email"></i>' . trim($data[1]) . '</p> 
           <p class="card-text"><i class="icofont-phone"></i>' . trim($data[2]) . '</p>
           <p class="card-text"><i class="icofont-address-book"></i>' . trim($data[3]) . '</p>
         </div>
       </div>
     </div>';
        }
      }
      //close file
      fclose($file);
      ?>
    </div>
  </div>
</section>
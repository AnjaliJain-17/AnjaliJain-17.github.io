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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {

    $("input[type='radio']").click(function() {

      $("button").click(function() {
        var rating = $("input[type='radio']:checked").val();
        var review = $.trim($("#review").val());
        var productName = $('#productName').text();
        console.log("productNAme", productName);
        if (review != "") {
          console.log(review);
        }
        $.post('submitrating.php', {
          rating: rating,
          review: review,
          productName: productName
        }, function(response) {
          alert(response);
          console.log(response);
        });
      });
    });

  });
</script>

<body style="text-align: center;">
  <div class="container" class="services section-bg" style="margin:10%;">


    <div class="text-center">

      <h3 id='productName'>Mental Wellbeing</h3>
      <div class="row">
        <div class="col-6 p-4">
          <div class="portfolio-wrap">
            <img src="../assets/img/p-10.jpeg" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-6" style="margin: auto;">
          <div class="card" style="border:none;">
            <div style="text-align:left">
              <h4>Description</h4>
            </div>
            <p style="text-align: left;">We understand the importance of mental wellbeing hence we provide weekly mental wellbeing counselling sessions both inperson & virtual</p>
          </div>

          <div class="card" style="border:none;">

            <div class="rating" style="text-align:left">
              <h4>Rate Us</h4>
              <input type="radio" id="star5" name="rating" value="5" />
              <label class="full" for="star5" title="Awesome">Awesome</label>

              <input type="radio" id="star4" name="rating" value="4" />
              <label class="full" for="star4" title="Very Good">Very Good</label>


              <input type="radio" id="star3" name="rating" value="3" />
              <label class="full" for="star3" title="Good">Good</label>


              <input type="radio" id="star2" name="rating" value="2" />
              <label class="full" for="star2" title="Bad">Bad</label>

              <input type="radio" id="star1" name="rating" value="1" />
              <label class="full" for="star1" title="Worst">Worst</label>
            </div>
          </div>
          <div class="card" style="border:none;">
            <div style="text-align:left;">
              <h4>Leave us a feedback</h4>
            </div>
            <textarea id="review" style="width:100%;height:80px;border-color:lightgrey;"></textarea>
            <p><button type="button" id="submit">Submit</button></p>
          </div>
        </div>

      </div>
    </div>

    <div class="container">


    </div>

  </div>



  </div>

  </div>
  </form>
  <a href="../index.php"><i class="icofont-arrow-left"></i><u>Go Back</u></a>
  </div>
  </div>

</body>

</html>
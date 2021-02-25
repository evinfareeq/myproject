<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="kurdistanBloodbank | home page"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>

    <div class="container cont">
  
   <?php require 'message.php'; ?>

   <?php
echo " " . date("l ") . date("Y.m.d") . "<br>";
?>
            
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-500" src="image/blood-bank.jpg" style="height: 500px;" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-600" src="image/6.jpg" style="height: 600px;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-600" src="image/7.jpg" style="height: 600px;" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  
</div>

                </div>
            </div>

            

        <div class="row">
            <div class="col-lg-6 rounded mb-5">

            </div>
            <div class="col-lg-6 rounded mb-5">
                 </div>

        </div>
    </div>

    <?php require 'footer.php'; ?>

</body>
</html>
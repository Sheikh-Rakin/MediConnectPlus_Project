<?php
  session_start();
  include('admin/vendor/inc/config.php');
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">
<!--Head-->
<?php include("vendor/inc/head.php");?>

<body>

    <!-- Navigation -->
    <?php include("vendor/inc/nav.php");?>
    <!--End Navigation-->

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="background-image: url('vendor/img/ambulancebackground3.jpg')">
                </div>

                <div class="carousel-item" style="background-image: url('vendor/img/ambulancebackground3.jpg')">
                </div>

                <div class="carousel-item" style="background-image: url('vendor/img/ambulancebackground3.jpg')">
                </div>


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
    </header>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to Ambulance Booking System</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Why Us</h4>
                    <div class="card-body">
                        <p class="card-text">We create accountability in the transport sector, enhance mobility and ease of accessing various transport modes</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Core Values</h4>
                    <div class="card-body">
                        <p class="card-text">
                            Excellence, Trust and Openness, Integrity, Take Responsibility, Customer Orientation
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        
        <!-- Portfolio Section -->
        <h2 class="center">Most Hired Ambulance</h2>
        <!--Portfolio Section -->
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="vendor/img/ambulance1.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="vendor/img/ambulance2.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="vendor/img/ambulance3.jpg" alt=""></a>
                </div>
            </div>

        </div>

        

    
    <!-- /.container -->

    <!-- Footer -->
    <?php include("vendor/inc/footer.php");?>
    <!--.Footer-->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>
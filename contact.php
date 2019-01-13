<?php include 'include/db_connection.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Us </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="assets\css\fontawesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="assets\fonts\flaticon.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets\css\animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets\css\owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets\css\magnific-popup.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets\css\style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets\css\responsive.css">
</head>

<body>
    <!-- preloader begin-->
    <div class="preloader">
        <div class='loader'>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--text'></div>
        </div>
    </div>
    <!-- preloader end -->

    <?php include 'include/header.php';?>

    <!-- page title begin-->
    <div class="page-title contact-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <h2 style="margin-left : 170px ;"> Contact Us </h2>
                    <p style="text-align: center ;">  Now that you know what we've done and what we could do for you , feel free to reach out  and start a conversation with us. 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- contact begin-->
    <div class="address-area">
        <div class="container">
            <div class="tsk-contact-info">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon-bar">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-details">
                                <h5>Our Address</h5>
                                <p> Tripoli , Libya</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon-bar">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-details">
                                <h5> Email Address </h5>
                                <a href="mailto:info@example.com"> contact@purplecode.ly</a>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon-bar">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="info-details">
                                <h5> Phone Number </h5>
                                <a href="tel:+8801234567890"> +218 910000000</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="contact ">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-form-outer">
                                <div class="row justify-content-center">
                                        <div class="col-xl-8 col-lg-8">
                                            <div class="section-title text-center">
                                                <h2>Contact Us For <span>Support</span></h2>
                                                <p> we always enjoy speaking with passionate business owners about their needs.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <form class="contact-form">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label for="InputName">Name<span class="requred">*</span></label>
                                                                <input type="text" class="form-control" id="InputName" placeholder="Enter Your Name" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label for="InputMail">E-mail<span class="requred">*</span></label>
                                                                <input type="email" class="form-control" id="InputMail" placeholder="Enter Your E-mail Address" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label for="InputPhone">Phone<span class="requred">*</span></label>
                                                                <input type="text" class="form-control" id="InputPhone" placeholder="Enter Your Phone Number" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label for="InputSubject">Subject<span class="requred">*</span></label>
                                                                <input type="text" class="form-control" id="InputSubject" placeholder="Enter Your Subject" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlTextarea1">Meassage<span class="requred">*</span></label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Your Meassage" required=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12">
                                                            <button type="submit">Send Now</button>
                                                        </div>
                                                    </div>
                                             </form>
                                      </div>
                               </div>
                        </div>
                    </div>
                </div>   
        </div>
    </div>
    <!-- contact end -->

    <?php include 'include/footer.php';?>
    
    <!-- scroll top button begin -->
    <div class="scroll-to-top">
        <a><i class="fas fa-long-arrow-alt-up"></i></a>
    </div>
    <!-- scroll top button end -->
    
    <!-- jquery -->
    <script src="assets\js\jquery.js"></script>
    <!-- bootstrap -->
    <script src="assets\js\bootstrap.min.js"></script>
    <!-- owl carousel -->
    <script src="assets\js\owl.carousel.js"></script>
    <!-- magnific popup -->
    <script src="assets\js\jquery.magnific-popup.js"></script>
    <!-- way poin js-->
    <script src="assets\js\waypoints.min.js"></script>
    <!-- counter up js-->
    <script src="assets\js\jquery.counterup.min.js"></script>
    <!-- wow js-->
    <script src="assets\js\wow.min.js"></script>
    <!-- google map API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&callback=initMap" async="" defer=""></script>
    <!-- google map activate -->
    <script src="assets\js\goolg-map-activate.js"></script>
    <!-- main -->
    <script src="assets\js\main.js"></script>
</body>
</html>
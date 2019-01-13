<?php include 'include/db_connection.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> register </title>
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
    <div class="page-title register-page">
        <!-- register begin-->
    <div class="contact register-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="register-page-innter-wrapper">
                                <div class="row justify-content-center">
                                        <div class="col-xl-7 col-lg-7">
                                            <div class="section-title text-center">
                                                <h2>Signup to <span>Create New Account</span></h2>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12">
                                            <form class="contact-form">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="InputFirstname">First Name<span class="requred">*</span></label>
                                                            <input type="text" class="form-control" id="InputFirstname" placeholder="Enter Your Name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="InputLastname">Last Name<span class="requred">*</span></label>
                                                            <input type="text" class="form-control" id="InputLastname" placeholder="Enter Your Last Name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="InputMail">E-mail<span class="requred">*</span></label>
                                                            <input type="email" class="form-control" id="InputMail" placeholder="Enter Your E-mail" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="InputUsername">User Name<span class="requred">*</span></label>
                                                            <input type="text" class="form-control" id="InputUsername" placeholder="Enter Your Username" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="InputPassword">Password<span class="requred">*</span></label>
                                                            <input type="password" class="form-control" id="InputPassword" placeholder="Enter Your Password" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="InputRetypepassword">Re-type Password<span class="requred">*</span></label>
                                                            <input type="password" class="form-control" id="InputRetypepassword" placeholder="Re-type Password" required="">
                                                        </div>
                                                    </div>
                            
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group mb-0 checkbox">
                                                            <div class="form-check pl-0">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                    I agree the terms & conditions
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                            
                                                    <div class="col-xl-6 col-lg-6">
                                                        <button type="submit" class="submit-button">Submit Now</button>
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
        <!-- register end -->
    </div>
    <!-- page title end -->

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
    <!-- main -->
    <script src="assets\js\main.js"></script>
</body>
</html>
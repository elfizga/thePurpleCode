<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
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

    <!-- header begin-->
    <header class="header">
        <div class="header-bottom">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-xl-2 col-lg-2 col-12 d-block d-xl-flex d-lg-flex align-items-center">
                        <div class="mobile-special">
                            <div class="row d-flex">
                                <div class="col-6 col-xl-12 col-lg-12 d-flex align-items-center">
                                    <div class="logo">
                                        <a href="index.php">
                                            <img src="assets\img\logo.png" alt="" width="140px" height="87px">                    
                                    </div>
                                </div>
                                <div class="col-6 d-block d-xl-none d-lg-none">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="mainmenu">
                            <nav class="navbar navbar-expand-lg">
                            
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto justify-content-center">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="investment.php">Investment Plan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="faq.php">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="blog.php">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.php">Contact </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 d-flex align-items-center">
                        <div class="join-us">
                            <a href="register.php"> sign up </a>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 d-flex align-items-center">
                         <div class="join-us">
                            <a href="login.php"> login </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- page title begin-->
    <div class="page-title l">
        <!-- login begin-->
    <div class="contact login-page-content">
            <div class="container">
               <div class="row justify-content-center">
                   <div class="col-lg-6">
                       <div class="login-page-outer">
                            <div class="login-form-outer">
                                    <div class="section-title text-center">
                                        <h2>Login On <span>Your Account</span></h2>
                                    </div>
                                </div>
                                <form class="contact-form">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="InputName">Name<span class="requred">*</span></label>
                                                <input type="text" class="form-control" id="InputName" placeholder="Enter Your Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="InputAmount">E-mail<span class="requred">*</span></label>
                                                <input type="email" class="form-control" id="InputAmount" placeholder="Enter Your E-mail Address" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group mb-0 checkbox">
                                                <div class="form-check pl-0">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Keep me loged in
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="row d-flex">
                                                <div class="col-xl-6 col-lg-6">
                                                    <button type="submit" class="login-button">Send Now</button>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                                                    <a href="#" class="forgetting-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                       </div>
                   </div>
               </div>
            </div>
        </div>
        <!-- login end -->
    </div>
    <!-- page title end -->

    <!-- footer begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-8">
                    <div class="box">
                        <div class="logo">
                            <a href="#">
                                <img src="assets\img\logo.png" alt="" width="170px" height="130px">  
                            </a>
                        </div>
                        <p>
                            Now that you know what we've done and what we could do for you , <br> feel free to reach out  and start a conversation. we always enjoy <br> speaking with passionate business owners about their needs.
                        </p>
                        <div class="social_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-7">
                    <div class="box box3">
                        <h2>
                            About Us
                        </h2>
                        <ul>
                             <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Contact 
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    FAQ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-5">
                    <div class="box box4">
                        <h2>
                            Contact Us
                        </h2>
                        <p>
                            Tripoli, Libya
                        </p>
                        <a href="#">
                            contact@purplecode.ly
                        </a>
                        <a href="#">
                            +218 91 0000000
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p class="text-center">
                © 2019. All Rights Reserved.
            </p>
        </div>
    </footer>
    <!-- footer end -->

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
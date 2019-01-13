<?php include 'include/db_connection.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blog Details </title>
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
    <div class="page-title blog-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8" style="margin-left: 200px;">
                    <h2 class="extra-margin" style="margin-left : 30px ;">Blog Details</h2>
                    <p> read more about the post and have fun </p>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- blog post begin-->
    <div class="blog-post single-blog-post">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-8">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="single-blog blog-details">
                                <div class="post-shadow">
                                    <div class="part-img">
                                        <img src="assets\img\blog-details.jpeg" alt="">
                                    </div>
                                    <div class="part-text">
                                        <h3><a href="blog-details.php">Blog Single Image Post</a></h3>
                                        <h4>
                                            <span class="admin">By Admin </span>.
                                            <span class="date">12 Nov, 2018 </span>.
                                            <span class="category">in Web Design </span>
                                        </h4>
                                        <p>We are full service Digital Marketing Agency all the tools you need for inbound success.
                                            With this module theres no
                                            need to go another Digital
                                            Marketing Agency all the tools you need for inbound success. With this module theres no
                                            need to go another day. We are
                                            full Marketing Agency
                                            all the tools you need for inbound success. With this module theres no need to go another
                                            day.</p>
                                    
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                                            of classical Latin
                                            literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor
                                            at Hampden-Sydney College
                                            in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum
                                            passage, and going through
                                            the cites of the word in classical literature, discovered the undoubtable source. Lorem
                                            Ipsum comes from sections
                                            1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                                            Cicero, written in 45 BC.
                                            This book is a treatise on the theory of ethics, very popular during the Renaissance. The
                                            first line of Lorem Ipsum,
                                            "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                            
                                        <div class="entry-footer">
                                            <div class="tag">
                                                <h5>Tag: <a href="#">Blog</a><a href="#">Single</a><a href="#">Image</a><a href="#">Post</a></h5>
                                            </div>
                                            <div class="share">
                                                <ul>
                                                    <li class="title">Share:</li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                                
                                <div class="comment-area">
                                    <div class="comment-shadow">
                                    <h3 class="comment-area-title">02 Comments</h3>
                                        <div class="single-comment border-top-none">
                                            <div class="part-user">
                                                <img src="assets\img\t2.png" alt="">
                                            </div>
                                            <div class="part-quot">
                                                <h4>Tamim Ubaidah</h4>
                                                <h5>29.08.18 Sat - 09:00pm</h5>
                                                <p>We are full service Digital Marketing Agency all the tools you need for inbound success. With this module
                                                    theres no
                                                    need.</p>
                                            </div>
                                            <button>Reply</button>
                                        </div>
                                        
                                        <div class="single-comment relpy">
                                            <div class="part-user">
                                                <img src="assets\img\t3.png" alt="">
                                            </div>
                                            <div class="part-quot">
                                                <h4>Tamim Ubaidah</h4>
                                                <h5>29.08.18 Sat - 09:00pm</h5>
                                                <p>We are full service Digital Marketing Agency all the tools you need for inbound success. With this module
                                                    theres no
                                                    need.</p>
                                            </div>
                                            <button>Reply</button>
                                        </div>
                                        
                                        <div class="single-comment">
                                            <div class="part-user">
                                                <img src="assets\img\t2.png" alt="">
                                            </div>
                                            <div class="part-quot">
                                                <h4>Tamim Ubaidah</h4>
                                                <h5>29.08.18 Sat - 09:00pm</h5>
                                                <p>We are full service Digital Marketing Agency all the tools you need for inbound success. With this module
                                                    theres no
                                                    need.</p>
                                            </div>
                                            <button>Reply</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-form">
                                    <div class="form-shadow">
                                        <h3 class="comment-form-title">Leave A Comment</h3>
                                        <form>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6">
                                                    <input type="text" placeholder="Your Name">
                                                </div>
                                                <div class="col-xl-6 col-lg-6">
                                                    <input type="email" placeholder="Your Email">
                                                </div>
                                                <div class="col-xl-12 col-lg-12">
                                                    <textarea placeholder="Write Your Message"></textarea>
                                                </div>
                                            </div>
                                            <button>Publish</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">
                    <div class="sidebar">
                        <div class="widget widget_search">
                            <form name="search_form" class="sayit_search_form" id="search_form">
                                <span class="sayit_icon_search"><i class="fa fa-search"></i></span>
                                <input class="sayit_field_search" name="s" placeholder="Search" title="Search the site..." form="search_form">
                                <div class="clear"></div>
                            </form>
                        </div>
            
                        <div class="widget widget_categories">
                            <h6 class="widgettitle"><span>Categories</span></h6>
            
                            <ul>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">App Develop</a></li>
                                <li><a href="#">UX Design</a></li>
                                <li><a href="#">Plugins Develop</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Print Design</a></li>
                                <li><a href="#">Media</a></li>
                            </ul>
                        </div>
            
                        <div class="widget widget-popular-post">
                            <h6 class="widgettitle">
                                <span>Popular Posts</span>
                            </h6>
            
                            <div class="single-post">
                                <div class="part-img">
                                    <img src="assets\img\popular-post-1.jpeg" alt="">
                                </div>
                                <div class="part-text">
                                    <h4><a href="#">There are many lorem ipsum</a></h4>
                                    <h5>29.08.18 Sat</h5>
                                </div>
                            </div>
            
                            <div class="single-post">
                                <div class="part-img">
                                    <img src="assets\img\popular-post-1.jpeg" alt="">
                                </div>
                                <div class="part-text">
                                    <h4><a href="#">There are many lorem ipsum</a></h4>
                                    <h5>29.08.18 Sat</h5>
                                </div>
                            </div>
            
                            <div class="single-post">
                                <div class="part-img">
                                    <img src="assets\img\popular-post-1.jpeg" alt="">
                                </div>
                                <div class="part-text">
                                    <h4><a href="#">There are many lorem ipsum</a></h4>
                                    <h5>29.08.18 Sat</h5>
                                </div>
                            </div>
                        </div>
            
                        <div class="widget widget_tag_cloud">
                            <h6 class="widgettitle">
                                <span>Tags</span>
                            </h6>
            
                            <div class="tagcloud">
                                <a href="#">Service</a>
                                <a href="#">Digital</a>
                                <a href="#">All</a>
                                <a href="#">Marketing</a>
                                <a href="#">Agency</a>
                                <a href="#">Tools</a>
                                <a href="#">Inbound</a>
                                <a href="#">You</a>
                                <a href="#">Need</a>
                                <a href="#">USA</a>
                                <a href="#">Success</a>
                                <a href="#">Thefor</a>       
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- blog post end -->

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
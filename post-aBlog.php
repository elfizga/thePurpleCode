<?php include 'include/db_connection.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> post A blog </title>
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
    <!-- sweetalert -->
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">

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
                                                <h2>Post <span>A Blog</span></h2>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12">

                                        <div class="rd-form rd-mailform form-lg" novalidate="novalidate">
                                        <div class="alert alert-danger hide_alert" id="erralert" style="display:none;">
                                        <strong> </strong>
                                        </div>
                                            <form class="contact-form" action="" method="post" id="regForm">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="category">category</label>
                                                            <select class="form-control form-control-has-validation" id="category" name="category" data-constraints="@Selected">
                                                            <option label="choose a category" selected="selected"></option>
                                                            <?php
                                                            global $con;
                                                            $query = $con->prepare("SELECT * FROM specializations;");

                                                           $query->execute();

                                                           $specs = $query->fetchAll();

                                                           foreach($specs as $spec) {
                                                               echo '<option value="' . $spec['spec_id'] . '">' . $spec["spec_name"] .'</option>';
                                                           }

                                                            ?>
                                                        </select>
                                                          
                                                        </div>
                                                    </div>
                                                   
                                                   
                                                   
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="desc">Description
                                                            </label><label id="lab"> </label>
                                                            <textarea class="form-control" id="desc" name="desc" ></textarea>
                                                        </div>
                                                    </div>
                            
                                                  
                            
                                                    <div class="col-xl-6 col-lg-6">
                                                        <button type="submit" class="submit-button" id="btn"> Submit Now </button>
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

    </div>
     

    <!-- scroll top button begin -->
    <div class="scroll-to-top">
        <a><i class="fas fa-long-arrow-alt-up"></i></a>
    </div>
    <!-- scroll top button end -->
<?php include 'include/footer.php';?>

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
    <!-- register validation -->
    <script src="assets\js\register.js"></script>
    <!-- sweet alert -->
    <script src="assets/js/sweetalert2.min.js"></script>
    <script>
</script>
</body>
</html>
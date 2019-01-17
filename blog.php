<?php include 'include/db_connection.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blog </title>
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
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8" style="margin-left: 80px;">
                    <h2 class="extra-margin" style="margin-left : 110px ;" >Blog Posts</h2>
                    <p>Enjoy reading our blog posts to know more about web designing .</p>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- blog post begin-->
    <div class="blog-post blog-page-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="sidebar">
                                <div class="widget widget_search">
                                    <form name="search_form" class="sayit_search_form" id="search_form">
                                        <span class="sayit_icon_search"><i class="fa fa-search"></i></span>
                                        <input class="sayit_field_search" id="myInput" type="text" name="employer" form="search_form" onkeyup="myFunction()">
                                        <div class="clear"></div>
                                    </form>
                            </div>
                    </div>
                    </div>
                   
                    <?php 
                        $sql = "
                            SELECT 
                            posts.post_id, posts.post_title, posts.post_image , posts.post_desc ,  posts.add_date ,
                            users.firstName , users.lastName , specializations.spec_name 
                            FROM posts 
                            INNER JOIN specializations ON specializations.spec_id = posts.spec_id 
                            INNER JOIN users ON users.user_id = posts.user_id ORDER BY post_id DESC ";
                        global $con;
                        $query = $con->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll();
                        foreach($results as $result) { ?>
                        
                      
                        <div class="col-xl-4 col-lg-4 col-md-4" id="myDiv">
                            <div class="single-blog">
                                <div class="part-img">
                                    <img src="assets\img\<?php echo $result['post_image']; ?>" alt="">
                                </div>
                                <div class="part-text">
                                    <h3><a href="blog-details.php"> <?php echo $result['post_title']; ?> </a></h3>
                                    <h4>
                                        <span class="admin">By <?php echo $result['firstName'] . ' ' . $result['lastName']; ?></span>.
                                        <span class="date"><?php echo $result['add_date']; ?> </span>.
                                        <span class="category">in <?php echo $result['spec_name']; ?> </span>
                                    </h4>
                                    <a class="read-more" href="blog-details.php"><span><i class="fas fa-book-reader"></i></span> Read This Post</a>
                                 
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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
    <script>
    function myFunction() {
    // Declare variables 
    var input, filter, div, div1, i,span;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDiv");
    div1 = table.getElementsByClass("part-text");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < div1.length; i++) {
      span = div1[i].getElementsByTagName("span")[0];
      if (span) {
        if (span.innerHTML.toUpperCase().indexOf(filter) > -1) {
          div1[i].style.display = "";
        } else {
          div1[i].style.display = "none";+
        }
      } 
    }
  }
    </script>
</body>
</html>
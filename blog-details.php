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
                            <?php  
                                if(isset($_GET['blogId'])){
                                $id=$_GET['blogId'];
                                $sql = "
                                            SELECT 
                                            posts.post_id, posts.post_title, posts.post_image , posts.post_desc ,  posts.add_date ,
                                            users.firstName , users.lastName , specializations.spec_name 
                                            FROM posts 
                                            INNER JOIN specializations ON specializations.spec_id = posts.spec_id 
                                            INNER JOIN users ON users.user_id = posts.user_id WHERE posts.post_id = ? ";
                                            global $con;
                                            $query = $con->prepare($sql);
                                            $query->execute(array($id));
                                            $result = $query->fetch();
                                            $post_id = $result['post_id'];
                                            ?>
                                    <div class="post-shadow">
                                    <div class="part-img">
                                        <img src="assets\img\<?php echo $result['post_image']; ?>"alt="" height="461">
                                    </div>
                                    <div class="part-text">
                                        <h3><?php echo $result['post_title']; ?></h3>
                                        <h4>
                                            <span class="admin">By  <?php echo $result['firstName'] . ' ' . $result['lastName']; ?> </span>.
                                            <span class="date"> <?php echo $result['add_date']; ?> </span>.
                                            <span class="category">in <?php echo $result['spec_name']; ?> </span>
                                        </h4>
                                        <p style=" height:auto;"> <?php echo $result['post_desc']; ?>  </p>
                                    
                                            
                                        <div class="entry-footer">
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
                                
                                <?php } ?>
                                <div class="comments">
                                <div class="comment-area">
                                <div class="comment-shadow">
                                <h3 class="comment-area-title"> Comments </h3>
                                <?php 
                                $stmt = $con->prepare("SELECT comments.*, users.firstName , users.lastName FROM comments INNER JOIN users ON users.user_id = comments.user_id WHERE post_id = ? ORDER BY comment_id");
                                $stmt->execute( array($_GET['blogId']) );
                                $comments = $stmt->fetchAll();
                                if( !empty($comments) ) { 
                                    foreach($comments as $comment) {
                                ?>
                            
                                        <div class="single-comment border-top-none col-xl-12 col-lg-12 col-md-12" >
                                            <div class="part-user">
                                                <img src="assets\img\popular-post-1.jpeg" alt="">
                                            </div>
                                            <div class="part-quot">
                                                <h4><?php echo $comment['firstName'] . ' ' . $comment['lastName']; ?></h4>
                                                <h5><?php echo $comment['comment_date'] ?></h5>
                                                <p><?php echo $comment['comment'] ?></p>
                                            </div>
                                        </div>

                                     <?php }}?>
                                </div>
                                </div>
                                </div>


                                <?php if (isset($_SESSION['userId'])) { ?>

                                <div class="comment-form">
                                    <div class="form-shadow">
                                        <h3 class="comment-form-title">Leave A Comment</h3>
                                        <form class="comment_form" action="<?php echo $_SERVER['PHP_SELF'] . '?blogId=' . $_GET['blogId']; ?>" method="POST">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12">
                                                    <textarea placeholder="Write Your Message" name="comment"></textarea>
                                                    <input type="hidden" name="post" id="post-id" value="<?php echo $_GET['blogId']; ?>" />
                                                </div>

                                            </div>
                                            <button type="submit">Publish</button>
                                        </form>
                            	</div>
		     </div>
	<!-- End Add Comment -->
	<?php } else {
		echo ' <br> <a href="login.php">Login</a> or <a href="register.php">Register</a> To Add Comment';
	} ?>
                                
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-xl-4 col-lg-4">
                    <div class="sidebar">
            
                        <div class="widget widget_categories">
                                    <h6 class="widgettitle"><span>Categories</span></h6>
                                    <ul>
                                    <?php 
                                        $sql = "
                                            SELECT * FROM specializations;
                                             ";
                                        global $con;
                                        $query = $con->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll();
                                        foreach($results as $result) { ?>
                                            <li><a href="blog.php?id=<?php echo $result['spec_id']; ?>"><?php echo $result['spec_name']; ?></a></li>
                                        <?php } ?>
                                        
                                    </ul>
                        </div>
            
                        <div class="widget widget-popular-post">
                            <h6 class="widgettitle">
                                <span> Recent Posts </span>
                            </h6>
                            <?php 
                                        $sql = "
                                            SELECT * FROM posts ORDER BY post_id DESC LIMIT 3;
                                             ";
                                        global $con;
                                        $query = $con->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll();
                                        foreach($results as $result) { ?>
                                                <div class="single-post">
                                                    <div class="part-img">
                                                        <img src="assets\img\<?php echo $result['post_image'];?>" alt="">
                                                    </div>
                                                    <div class="part-text">
                                                        <h4><a href="blog-details.php?blogId=<?php echo $result['post_id']; ?>" > <?php
                                                        $title = ""; 
                                                            if(strlen($result['post_title']) > 15) {
                                                                $title = substr($result['post_title'], 0, 21) . "...";
                                                            } else {
                                                                $title = $result['post_title'];
                                                            }
                                                            $title = strtolower($title);
                                                            $title = ucfirst($title);
                                                        echo $title; ?> </a></h4>
                                                        <h5><?php echo $result['add_date']; ?></h5>
                                                    </div>
                                             </div>                                        
                            <?php } ?>
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
   
    <script>

    $(".comment_form").submit(function(e) {
        e.preventDefault();
        url = "addComment.php";
        comment = $("textarea").val();
        post = $("#post-id").val();
        $.ajax({
            type: 'POST',
            url: url,
            data: 'comment=' + comment + '&post=' + post,
            success: function(data) {
                if (data.indexOf("Error") === -1) {
                    var new_comment = data;
                    $(".comment-shadow").append(new_comment);
                    $(".comment_form textarea").val('');
                } else {
                    alert(" comment can not be empty");
                    console.log('empty');
                }    
            } ,
            error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError);
                    console.log('error');
            }
        });
    });
    </script>
</body>
</html>
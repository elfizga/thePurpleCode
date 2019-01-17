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
                                            ?>
                                    <div class="post-shadow">
                                    <div class="part-img">
                                        <img src="assets\img\<?php echo $result['post_image']; ?>"alt="">
                                    </div>
                                    <div class="part-text">
                                        <h3><?php echo $result['post_title']; ?></h3>
                                        <h4>
                                            <span class="admin">By  <?php echo $result['firstName'] . ' ' . $result['lastName']; ?> </span>.
                                            <span class="date"> <?php echo $result['add_date']; ?> </span>.
                                            <span class="category">in <?php echo $result['spec_name']; ?> </span>
                                        </h4>
                                        <p> <?php echo $result['post_desc']; ?>  </p>
                                    
                                            
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

                                <?php
                                $stmt = $con->prepare("SELECT 
										comments.*, users.Username AS Member  
									FROM 
										comments
									INNER JOIN 
										users 
									ON 
										users.user_id = comments.user_id
									WHERE 
										post_id = ?
								
									");

			// Execute The Statement

			$stmt->execute(array($result['post_id']));

			// Assign To Variable 

			$comments = $stmt->fetchAll();

		?>
	
	<?php foreach ($comments as $comment) { ?>

                                <div class="comment-area">
                                    <div class="comment-shadow">
                                    <h3 class="comment-area-title">02 Comments</h3>
                                        <div class="single-comment border-top-none">
                                            <div class="part-user">
                                                <img src="assets\img\t2.png" alt="">
                                            </div>
                                            <div class="part-quot">
                                                <h4><?php echo $comment['Member'] ?></h4>
                                                <h5><?php echo $comment['comment_date'] ?></h5>
                                                <p><?php echo $comment['comment'] ?></p>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>


                                <?php if (isset($_SESSION['userId'])) { ?>

                                <div class="comment-form">
                                    <div class="form-shadow">
                                        <h3 class="comment-form-title">Leave A Comment</h3>
                                        <form action="<?php echo $_SERVER['PHP_SELF'] . '?blogId=' . $result['post_id'] ?>" method="POST">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12">
                                                    <textarea placeholder="Write Your Message" name="comment"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit">Publish</button>
                                        </form>
                                        
                                        <?php 
					if ($_SERVER['REQUEST_METHOD'] == 'POST') {

						$comment 	= filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
						$postId 	= $result['post_id'];
						$userid 	= $_SESSION['userId'];

						if (! empty($comment)) {

							$stmt = $con->prepare("INSERT INTO 
								comments SET
                                comment = ?,
                                post_id = ?,
                                user_id = ?;");

							$stmt->execute(array(

								 $comment,
                                 $postId ,
								 $userid

							));

							if ($stmt) {

								echo '<div class="alert alert-success">Comment Added</div>';

							}

						} else {

							echo '<div class="alert alert-danger">You Must Add Comment</div>';

						}

					}
				?>
			</div>
		</div>
	<!-- End Add Comment -->
	<?php } else {
		echo '<a href="login.php">Login</a> or <a href="register.php">Register</a> To Add Comment';
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
</body>
</html>
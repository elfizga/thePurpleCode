<?php 

function h($string) {
    return htmlspecialchars($string);
}
    session_start();

    require_once 'include/db_connection.php';

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['comment'])) {

        if( isset($_SESSION['userId']) && isset($_POST['post']) ) {
            
            $errors = "";
            if( empty($_POST['comment']) ) {
                $errors = "Error";
                echo $errors;
            }
            if( empty($errors) ) {
                $query1 = $con->prepare("INSERT INTO comments SET comment = ?, post_id = ?, user_id = ?, comment_date = NOW()");
                $query1->execute( array(h($_POST['comment']), $_POST['post'], $_SESSION['userId']) );
                $query = $con->prepare("SELECT * FROM users WHERE user_id = ?");
                $query->execute( array($_SESSION['userId']) );
                $user = $query->fetch();
                echo '<div class="single-comment border-top-none col-xl-12 col-lg-12 col-md-12" >'.
                        '<div class="part-user">' .
                        '<img src="assets/img/popular-post-1.jpeg" alt="">' .
                        '</div>' .
                        '<div class="part-quot">' .
                        '<h4>' . $user['firstName'] . ' ' . $user['lastName'] . '</h4>'.
                        '<h5>' . date('Y-m-d H:i:s') . '</h5>'.
                        '<p>' . h($_POST['comment']) . '</p>'.
                        '</div>'.
                        '</div>';
            }
            
        }
    }

   
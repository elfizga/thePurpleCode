
<?php 

function h($string) {
    return htmlspecialchars($string);
}
    session_start();

    require_once 'include/db_connection.php';

   include 'include/header.php'

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
                echo '<div class="single-comment border-top-none">';
                    echo '<div class="part-user">';
                        echo '<img src="assets\img\t2.png" alt="">';
                        echo '</div>';
                        echo ' <div class="part-quot">';
                        echo '<h4>' . $user['username'] . '</h4>';
                        echo '<h5>' . $user['comment_date'] . '</h5>';
                        echo '<p>' . $user['comment'] . '</p>';
                    echo '</div>';
                echo '</div>';
            }
            
        }
    }

   
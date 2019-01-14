
<?php
session_start();
ob_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        include 'include/db_connection.php';
        
        $email = '';
        $password = '';

        if(isset($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            header("Location: index.php");
        }

        if(isset($_POST['password'])) {
            $password = $_POST['password'];
        } else {
            header("Location: index.php");
        }

    global $con;
        $query = $con->prepare("SELECT * from users WHERE email = ? AND password = ?;");
        $query->execute(
            array( $email, $password)
        );
        $count = $query->rowCount();

        $result = $query->fetch();
        if($count > 0) {
            $_SESSION['userId'] = $result['user_id'];
            $_SESSION['userType'] = $result['userType_ID'];
            header("Location: index.php");
        } else {
            echo " make sure your email and password is right ";
        }

}else {
    header("Location: index.php");
    die();
}


?>
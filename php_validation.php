<?php 
include 'include/db_connection.php';

$isError = false ;
$message ="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname=$_POST["InputFirstname"];
    $lastname=$_POST["InputLastname"];
    $username=$_POST["InputUsername"];
    $pass1=$_POST["InputPassword"];
    $pass2=$_POST["InputRetypepassword"];
    $email=$_POST["InputMail"];

    if(empty($firstname)){
        $isError = true ;
    }

    if(empty($lastname)){
        $isError = true ;

    }

    if(empty($username)){
        $isError = true ;
    } 

    if(empty($pass1)){
        $isError = true ;
    } else if(strlen($pass1) < 8) {
        $isError = true ;
    }

    if(empty($pass2)){
        $isError = true ;
    } 

    if($pass1 != $pass2){
        $isError = true ; 
    }

    if(empty($email)){
        $isError = true ;
    } else  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isError = true ;
    }


     if ($isError == false)
     {
         global $con;
         $query = $con->prepare("INSERT INTO users
         SET 
         firstName = ? ,
         lastName =? ,
         email = ? ,
         password = ? ,
         username = ?,
         userType_id = 2 ;  ");

        $query->execute(
            array(
                $firstname , $lastname , $email , $pass1 , $username
            ));
    }
} else {

    echo "error";
}
?>
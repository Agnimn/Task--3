<?php 
session_start();


// $username = "";
$email = "";
$password = "";
$errors = array();

$db = mysqli_connect('localhost','root',$password,'task-3');

if (isset($_POST['reg_user'])){

    $email=mysqli_real_escape_string($db,$_POST['email']);
    $pass1=mysqli_real_escape_string($db,$_POST['pass1']);
    $pass2=mysqli_real_escape_string($db,$_POST['pass2']);

    if (empty($email)){ array_push($errors,"Email is required");}
    if (empty($pass1)){ array_push($errors,"Password is required");}
    if($pass1 != $pass2){
        array_push($errors,"Passwords doesn't matched! ");
    }

    $user_check_query = "SELECT * FROM email WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db,$user_check_query);
    $user =mysqli_fetch_assoc($result);

    if ($user['email'] === $user) {
        if ($user['email'] === $email) {
            array_push($errors,"Email is Reqi red");
        }
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "INSERT INTO `sign-up` (`email`, `pass1`, `pass2`) VALUES ('$email', '$pass1', '$pass2')";
        $result= mysqli_query($db,$query);
    header('location: signup.php');

    }
    if (isset($_POST['Signup_user'])){
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($pass1)){
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0){
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are logged in";
            header('location:lANDING PROFILE.html');

        }else {
            array_push($errors,"Wrong username/Password Combination");  
        }
    }
}







?>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
      
    session_start();
    $connection = mysqli_connect("localhost","root","","traveler");

    if($connection){
        echo 'db connected';
    }
    else{
        echo 'dn no connected';
    }

    $connection = mysqli_connect("localhost","root","","traveler");


    if (isset($_POST['registerbtn'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirmpassword'];
        $usertype = "user";

        if($password === $cpassword){
            $query = "INSERT INTO register(username,email,password,usertype) VALUES('$username','$email','$password','$usertype')";
            $query_run = mysqli_query($connection,$query);

            if($query_run){
                //echo "saved";
                $alert ="<script>alert('$email Your Account is Created! Please Login!')</script>";
                $_SESSION['username'] = $alert;
                header('Location: ../index.php');
            }
            else{
                //echo"not saved";
                $_SESSION ['status'] = "Admin Profile Not Added";
                header('Location: register.php');
            }
        }
        else{
            $_SESSION ['status'] = "Password are does not match";
                header('Location: register.php');
        }        
    }


    if(isset($_POST['login_btn'])){
        $email_login = $_POST['email'];
        $password_login = $_POST['password'];

        $query = "SELECT * FROM register WHERE email='$email_login' and password='$password_login'";
        $query_run = mysqli_query($connection,$query);
        $usertype = mysqli_fetch_array($query_run);

        if($usertype['usertype'] == "admin"){
            $_SESSION['username'] = $email_login;
            header('Location: ../../admin/index.php');
        }
        else if($usertype['usertype'] == "user"){
            $_SESSION['username'] = $email_login;
            header('Location: ../index_user.php');
        }
        else{
            $_SESSION['logstatus'] = "Email id is not valid  $email_login $password_login";
            header('Location: ../index.php');
        }

    }







    if(isset($_POST['logout_btn'])){
        session_destroy();
        unset($_SESSION['username']);
        header('Location: ../index.php');
    }


   







?>









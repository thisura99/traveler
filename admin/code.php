<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
      
    session_start();
    include('database/dbconfig.php');

    $connection = mysqli_connect("localhost","root","","traveler");

    if (isset($_POST['registerbtn'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirmpassword'];
        $usertype =  "user";

        if($password === $cpassword){
            $query = "INSERT INTO register(username,email,password,usertype) VALUES('$username','$email','$password','$usertype')";
            $query_run = mysqli_query($connection,$query);

            if($query_run){
                //echo "saved";
                $alert ="<script>alert('$email New Account is Added!')</script>";
                $_SESSION ['success'] = $alert;
                header('Location: pages/register.php');
            }
            else{
                //echo"not saved";
                $alert ="<script>alert('$email New Account is Not Created!')</script>";
                $_SESSION ['status'] = $alert;
                header('Location: pages/register.php');
            }
        }
        else{
            $alert ="<script>alert('$email Your Password is Not Match!')</script>";
            $_SESSION ['status'] = $alert;
                header('Location: pages/register.php');
        }

        
    }









    if(isset($_POST['updatebtn'])){
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $edit_usertype = $_POST['edit_usertype'];
    
        //$query = "UPDATE `register` SET `username`=[$username],`email`=[$email],`password`=[$password] WHERE id='$id'";
        $query = "UPDATE register SET username='$username',email='$email',password='$password',usertype='$edit_usertype' WHERE id='$id'";
        $query_run = mysqli_query($connection,$query);
    
        if($query_run){
            $alert ="<script>alert('$email Your Data is updated!')</script>";
            $_SESSION ['success'] = $alert;
            header('Location: pages/register.php');
        }
        else{
            $alert ="<script>alert('$email Your Data is Not updated!')</script>";
            $_SESSION ['status'] = $alert;
            header('Location: pages/register.php');
        }
    }


    if(isset($_POST['delete_btn'])){
        $id = $_POST['delete_id'];

        $query = "DELETE FROM register WHERE id='$id'";
        $query_run = mysqli_query($connection,$query);
    
        if($query_run){
            $alert ="<script>alert('$email Your Data is Deleted')</script>";
            $_SESSION ['success'] = $alert;
            header('Location: pages/register.php');
        }
        else{
            $alert ="<script>alert('$email Your Data Not Deteled!')</script>";
            $_SESSION ['status'] = $alert;
            header('Location: pages/register.php');
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
            header('Location: index.php');
        }
        else if($usertype['usertype'] == "user"){
            $_SESSION['username'] = $email_login;
            header('Location: ../travel/pages/index_user.php');
        }
        else{
            $_SESSION['logstatus'] = "Email id is not valid  $email_login $password_login";
            header('Location: login.php');
        }

    }







    if(isset($_POST['logout_btn'])){
        session_destroy();
        unset($_SESSION['username']);
        header('Location: ../travel/index.php');
    }


   







?>










<?php
session_start();
        if(isset($_POST['login_btn'])){
            $email_login = $_POST['email'];
            $password_login = $_POST['password'];
    
            $query = "SELECT * FROM register WHERE email ='$email_login' and password ='$password_login'";
            $query_run = mysqli_query($connection,$query);
        }
    
        if(mysqli_fetch_array($query_run)){
            $_SESSION['logusername'] = $email_login;
            header('Location: index.php');
        }
        else{
            $_SESSION['status'] = 'Email id or password is incorrect!';
            header('Location: login.php');
        }

?>
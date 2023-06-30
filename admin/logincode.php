<?php
include('security.php');
?>



    
    
<?php
    if(isset($_POST['login_btn'])){
        $email_login = $_POST['email'];
        $password_login = $_POST['password'];

        $query = "SELECT * FROM register WHERE email ='$email_login' and password ='$password_login'";
        $query_run = mysqli_query($connection,$query);
        $usertype = mysqli_fetch_array($query_run);

        if($usertype['usertype'] == 'admin'){
            $_SESSION['username'] = $email_login;
            header('Location: index.php');
        }
        else if($usertype['usertype'] == 'user'){
            $_SESSION['username'] = $email_login;
            header('Location: ../index.html');
        }
        else{
            $_SESSION['logstatus'] = 'Email id or password is incorrect!';
            header('Location: login.php');
        }

    }

    if(isset($_POST['login_btn'])){
        $email_login = $_POST['email'];
        $password_login = $_POST['password'];

        $query = "SELECT * FROM register WHERE email='$email_login' and password='$password_login'";
        $query_run = mysqli_query($connection,$query);
        $usertype = mysqli_fetch_array($query_run);

        if($usertype == "admin"){
            $_SESSION['username'] = $email_login;
            header('Location: index.php');
        }
        else if($usertype == "user"){
            $_SESSION['username'] = $email_login;
            header('Location: index.php');
        }
        else{
            $_SESSION['logstatus'] = "Email id is not valid  $email_login $password_login";
            header('Location: login.php');
        }

    }
?>
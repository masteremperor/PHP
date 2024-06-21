<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

        require_once('connection.php');

        session_start();
        $email = $_POST['email'];
        //$password = $_POST['password'];
        $password = hash('sha256', $password);

        $query = "SELECT * FROM `user` WHERE email = '$email' AND PASSWORD = '$password'";
        
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        
        if(mysqli_num_rows($result) > 0){

            $_SESSION['first_name'] = $row['FIRST NAME'];
            $_SESSION['last_name'] = $row['LAST NAME'];
            $_SESSION['email']=$email;
            header("Location: dashboard.php");
            die(); 
        }
        else{
            $_SESSION['err_msg'] = "incorrect username or password";
            header("Location: index.php");
        }
        
    }
?>
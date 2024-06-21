<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    require_once('connection.php');
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $repwd = $_POST['repwd'];
    $contact = $_POST['contact'];
    
    $hashpwd = hash('sha256',$pwd);


    $query = "INSERT INTO `user` (`ID`, `FIRST NAME`, `LAST NAME`, `EMAIL`, `CONTACT`, `PASSWORD`) VALUES (NULL, '$fname', '$lname', '$email', '$contact', '$hashpwd')";

    if($pwd == $repwd){
        $result = mysqli_query($conn, $query);
    }
    if($result){
        header("Location: dashboard.php");
    }
    else{
        
    }

}
?>

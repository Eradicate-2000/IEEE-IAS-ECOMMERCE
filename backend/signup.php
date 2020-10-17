<?php

    include('conn.php');

    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $check_uname = "select * from loginsystem where username=" . $username ;

        $result = mysqli_query($conn , $check_uname);
        $ifexist = mysqli_num_rows($result);

        if ($ifexist != 0){
            header('location: signup.html');
            echo "<script> alert('Username already exists') </script>";
            exit();
        }
        elseif ($password != $cpassword) {
            header('location: signup.html');
            echo "<script> alert('Different Passwords') </script>";
            exit();
        }
        else{
            $query = "insert into loginsystem(username , password) values('" . $username . "," . $password ."'";
            $signup = mysqli_query($conn , $query);
            if (!$signup) {
                die('Invalid query: ' . mysqli_error($conn));
            }
            header('location: login.html');
            exit;
        }
    
    }


?>
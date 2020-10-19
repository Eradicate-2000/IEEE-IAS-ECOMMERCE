<?php

    include('conn.php');

    if (isset($_POST['username'])){
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "select * FROM loginsystem WHERE username='".$username."' AND password='".$password."' limit 1 ";

        $result = mysqli_query($conn , $query);
        
        if(mysqli_num_rows($result)==1){
            header('location: ./index.html');
            exit();
        }
        else{
            header('location: ./signup.html');
            exit();
        }

    }


?>
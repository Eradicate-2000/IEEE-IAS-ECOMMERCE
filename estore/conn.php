<?php

    $conn = mysqli_connect('localhost','root','');
    mysqli_select_db('ecommerce', $conn)or die(mysqli_error($conn));

?>
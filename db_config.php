<?php
    $conn=new mysqli("localhost:3307","root","","nayan_auth");
        if($conn->connect_error){
            die($conn->connect_error);
        }
    ?>
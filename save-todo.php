<?php
include('./db_config.php');
if($_SERVER['REQUEST_METHOD']=== "POST"){


    $todo_item = $_POST['todo'];
    echo "you have entered  " .$todo_item."  to the list";
    
    $sql="INSERT INTO user (`name`) VALUES('$todo_item')";
    $result=$conn->query($sql);
    header('location:./index.php');
}


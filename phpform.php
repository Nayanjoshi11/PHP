

<?php

    if($_SERVER["REQUEST_METHOD"]=== "POST"){
        echo"<pre>";
        print_r($_POST);
        echo"</pre>";
    
        $email = $_POST['email'];
        $password = $_POST['password'];

        //database here

        $conn= new mysqli("localhost","root","","login_auth");
        
        if($conn->connect_error){
            die("$conn->connect_error");
        }

        echo "success";

        $sql = "SELECT * FROM user WHERE email='$email'";
        $result=$conn->query($sql);
        echo"<pre>";
        print_r($result);
        echo"</pre>";

       $row = $result->fetch_assoc();

       print_r($row);
       echo"<pre>";

       $db_email = $row['email'];
       $db_password=$row['password'];
       if($password===$db_password){
        echo"login success";
       }
       else{
        echo"login failed";
       }
    }

?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="Enter you email" id="email"><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Enter your password" id="password"><br><br>
    <button type="submit">Login</button>
    
</body>
</html>
   


<?php

    if($_SERVER["REQUEST_METHOD"]=== "POST"){
        echo"<pre>";
        print_r($_POST);
        echo"</pre>";
    
        $email = $_POST['email'];
        $password = $_POST['password'];
        
    
        echo $email . " ";
        echo $password;
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
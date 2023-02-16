<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>

    <form   method="post" action="<?php $_SERVER["PHP_SELF"];?>">
        <input type="text" name="username" placeholder="Enter your username">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="password" name="pass" placeholder="Enter your password">
        <input type="text" name="phone" placeholder="Enter your phone">
        <input type="number" name="email" placeholder="Enter your age">
        <input type="submit" name="submit" value="Submit">
    </form>
    Welcome <?php echo $_POST["username"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

    
</body>
</html>




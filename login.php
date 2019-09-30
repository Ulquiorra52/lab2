<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lab2</title>
</head>
<body>
<div class="conteiner">
    <form class="form-signin" method="POST>
    <h2>Login</h2>
<input type="text" name="username" class="form-control" placeholder="Username" required>
<input type="password" name="password" class="form-control" placeholder="Email" required>
<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
<a href="index.php" class="btn btn-lg btn-primary btn-block">Registration</a>
</form>
</div>
<?php
session_start();
require ('connect.php');
if (isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $connection =;
    $result = (mysqli_query($connection, $query)) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION['username'] = $username;
    }else{
        $fmsg = "Ошибка"
    }
}
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "Hello" . $username . "";
    echo "Вы вошли";
    echo "<a href='logout.php' class='btn btn-lg btn-primary'>Logout</a>";
}
    ?>
</body>
</html>
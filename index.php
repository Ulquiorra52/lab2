<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>lab2</title>
</head>
<body>
<?php
if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($connection, $query);
    if ($result){
        $smgg="Peгистрация прошла успешно";
    }else{
        $fsmsg ="Ошибка";
    }

}
?>
<div class="conteiner">
    <form class="form-signin" method="POST>
    <h2>Registration</h2>
    <?php if(isset($smgg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smgg; ?> </div><?php } ?>
    <?php if(isset($fsmgg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmgg; ?> </div><?php } ?>

    <input type="text" name="username" class="form-control" placeholder="Username" required>
    <input type="email" name="email" class="form-control" placeholder="Email" required>
    <input type="password" name="password" class="form-control" placeholder="password" required>
<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
<a href="login.php" class="btn btn-lg btn-primary btn-block">Login</a>
</form>
</div>
</body>
</html>
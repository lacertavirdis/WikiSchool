<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="../graphics/favicon.png">
    <?php $connection = mysqli_connect("localhost", "root", "", "ws") ?>
    <title>WikiSchool</title>
</head>
<body>
    <form method="post" id="l">
        <input type="text" name="login" placeholder="Login"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Login</button>
        <a href="create_an_account.php">or create an account</a>
    </form>
    <div id="komunikat">
        <img src="../graphics/logo.png" alt="logo">
        <h1>Welcome to <b>WikiSchool!</b></h1>
    </div>
    <script src="../js/script.js?v=<?php echo time(); ?>">
    </script>
</body>
</html>
<?php
mysqli_close($connection);
?>
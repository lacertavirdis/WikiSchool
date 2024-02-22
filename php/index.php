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
    <?php
        if(isset($_POST["login"]) && isset($_POST["password"])){
            $login = $_POST["login"];
            $password = sha1($_POST["password"]);

            $exists = mysqli_query($connection, "SELECT username FROM users WHERE username LIKE '$login';");

            if(mysqli_num_rows($exists) == 0){
                echo "You don't have an account";
            }
            else{
                $q = "SELECT username, password FROM users
                    WHERE username LIKE '$login' AND password LIKE '$password';";
                $result = mysqli_query($connection, $q);
                if(mysqli_num_rows($result) == 0){
                    echo "Your data is incorrect";
                }
                else{
                    echo "You've been logged in successfully";
                }
            }
        }
        else{
            echo "You have to fill all the prompts";
        }
    ?>
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
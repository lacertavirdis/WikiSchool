<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="../../graphics/favicon.png">
    <title>WikiSchool</title>
</head>
<body>
    <header>
        <div>
            <a href=""><img alt="english" src="../../graphics/britain2.png"></a> 
            <a href="../de/index_de.php"><img alt="german" src="../../graphics/germany.png"></a>
            <a href="../pl/index_pl.php"><img src="../../graphics/poland.png" alt="polish"></a>
        </div>
        <div>
            <img src="../../graphics/logo2.png" alt="logo" id="logo">
        </div>
    </header>
    <form method="post" id="l" action="homepage.php">
        <div><h3>Login</h3></div>
        <input type="text" name="login" placeholder="Login" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
        <a href="create_an_account.php">or create an account</a>
    </form>
    <div id="komunikat">
        <img src="../../graphics/logo.png" alt="logo">
        <h1>Welcome to <b>WikiSchool!</b></h1>
    </div>
    <script src="../../js/script.js?v=<?php echo time(); ?>">
    </script>
</body>
</html>
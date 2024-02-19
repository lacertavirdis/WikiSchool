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
    <form method="post" id="ca">
        <input type="text" name="firstName" placeholder="First name"><br>
        <input type="text" name="lastName" placeholder="Last name"><br>
        <input type="text" name="login" placeholder="Login"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <select name="category">
            <option value="1">Student</option>
            <option value="2">Teacher</option>
        </select><br>
        <button type="submit">Create an account</button>
    </form>
</body>
</html>
<?php
mysqli_close($connection);
?>
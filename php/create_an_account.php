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
    <?php
        if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["login"]) && isset($_POST["password"])){
            $firstname = $_POST["firstName"];
            $lastname = $_POST["lastName"];
            $login = $_POST["login"];
            $password = sha1($_POST["password"]);
            $category = $_POST["category"];

            $exists = mysqli_query($connection, "SELECT username FROM users WHERE username LIKE '$login';");

            if(mysqli_num_rows($exists) == 1){
                echo "You already have an account";
            }
            else{
                $q = "INSERT INTO users(username, password, first_name, last_name, category_id)
                    VALUES ('$login', '$password', '$firstname', '$lastname', $category);";
                $result = mysqli_query($connection, $q);
                echo "Your account was created successfully";
            }
        }
        else{
            echo "You have to fill all the prompts";
        }
    ?>
</body>
</html>
<?php
mysqli_close($connection);
?>
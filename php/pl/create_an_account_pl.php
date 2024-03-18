<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="../../graphics/favicon.png">
    <?php $connection = mysqli_connect("localhost", "root", "", "ws") ?>
    <title>WikiSchool</title>
</head>
<body>
    <img alt="teams" src="../../graphics/logo2.png" id="logo">
    <div id="flags">
        <a href="../british/create_an_account_en.php"><img alt="english" src="../../graphics/britain2.png" class="languages"></a>
        <div class="empty"></div>
        <a href="../german/create_an_account_de.php"><img alt="german" src="../../graphics/germany.png" class="languages"></a> 
        <div class="empty"></div>
        <img alt="polish" src="../../graphics/poland.png" class="languages"> 
    </div>
    <form method="post" id="ca">
        <h2 id="instruction">Wprowadź swoje imię i nazwisko, utwórz login i hasło, wybierz czy jesteś nauczycielem czy uczniem, następnie kliknij na przycisk aby wygenerować nowe konto.</h2>
        <div id="data">
            <input class="type2" type="text" name="firstName" placeholder="Imię" required>
            <input class="type2" type="text" name="lastName" placeholder="Nazwisko" required><br>
            <input class="type2" type="text" name="login" placeholder="Login" required>
            <input class="type2" type="password" name="password" placeholder="Hasło" required>
        </div>
        <select name="category">
            <option value="1">Uczeń</option>
            <option value="2">Nauczyciel</option>
        </select>
        <button type="submit">Utwórz konto</button>
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
                echo "Twoje konto zostało pomyślnie stworzone";
            }
        }
        else{
            echo "Musisz wprowadzić wszystkie informacje";
        }
    ?>
</body>
</html>
<?php
mysqli_close($connection);
?>
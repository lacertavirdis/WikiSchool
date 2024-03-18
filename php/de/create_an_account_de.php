<!DOCTYPE html>
<html lang="de">
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
        <img alt="german" src="../../graphics/germany.png" class="languages"> 
        <div class="empty"></div>
        <a href="../polish/create_an_account_pl.php"><img alt="polish" src="../../graphics/poland.png" class="languages"></a>
    </div>
    <form method="post" id="ca">
        <h2 id="instruction">Geben Sie Ihren Vornamen und Nachnamen ein, erstellen Sie Ihr Login und Ihr Passwort, wählen Sie, ob Sie Schüler oder Lehrer sind, und klicken Sie dann auf die Schaltfläche, um ein neues Konto zu erstellen.</h2>
        <div id="data">
            <input class="type2" type="text" name="firstName" placeholder="Vornamen" required>
            <input class="type2" type="text" name="lastName" placeholder="Nachname" required><br>
            <input class="type2" type="text" name="login" placeholder="Anmeldung" required>
            <input class="type2" type="password" name="password" placeholder="Passwort" required>
        </div>
        <select name="category">
            <option value="1">Studenten</option>
            <option value="2">Lehrer</option>
        </select>
        <button type="submit">Ein Konto erstellen</button>
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
                echo "Sie haben bereits ein Konto";
            }
            else{
                $q = "INSERT INTO users(username, password, first_name, last_name, category_id)
                    VALUES ('$login', '$password', '$firstname', '$lastname', $category);";
                $result = mysqli_query($connection, $q);
                echo "Ihr Konto wurde erfolgreich erstellt";
            }
        }
        else{
            echo "Sie müssen alle Eingabefelder ausfüllen";
        }
    ?>
</body>
</html>
<?php
mysqli_close($connection);
?>
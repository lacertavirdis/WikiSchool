<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="../../graphics/favicon.png">
    <title>WikiSchool</title>
</head>
<body>
<img alt="teams" src="../../graphics/logo2.png" id="logo" style="display:none">
<div id="flags">
    <a href="../british/index_en.php"><img alt="english" src="../../graphics/britain2.png" class="languages"></a> 
    <div class="empty"></div>
    <a href="../german/index_de.php"><img alt="german" src="../../graphics/germany.png" class="languages"></a>
    <div class="empty"></div>
    <img alt="polish" src="../../graphics/poland.png" class="languages">
</div>
    <form method="post" id="l">
    <h2>Wpisz swój login i hasło, nastęnie kliknij na przycisk aby się zalogować lub kliknij na "Stwórz nowe konto" jeśli nie masz jeszcze swojego konta</h2>
        <input type="text" name="login" placeholder="Login" required>
        <input type="password" name="password" placeholder="Hasło" required>
        <button type="submit">Zaloguj się</button>
        <a href="../polish/create_an_account_pl.php" id="creating">Stwórz nowe konto</a>
    </form>
    <div id="komunikat">
        <img src="../../graphics/logo2.png" alt="logo">
        <h1>Witamy na <b>WikiSchool!</b></h1>
    </div>
    <script src="../../js/script.js?v=<?php echo time(); ?>">
    </script>
</body>
</html>
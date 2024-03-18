<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "", "ws");

    if(isset($_POST["login"]) && isset($_POST["password"])){
        $login = $_POST["login"];
        $password = sha1($_POST["password"]);

        $exists = mysqli_query($connection, "SELECT username FROM users WHERE username LIKE '$login';");

        if(mysqli_num_rows($exists) == 0){
            echo "NIe istnieje takie konto";
        }
        else{
            $q = "SELECT username, password FROM users
                WHERE username LIKE '$login' AND password LIKE '$password';";
            $result = mysqli_query($connection, $q);

            if(mysqli_num_rows($result) == 0){
                echo "Twoje dane są niepoprawne";
            }
            else{
                echo "Zostałeś pomyślnie zalogowany";
                $_SESSION['status'] = 'success';
            }
            if(isset($_SESSION["status"])){
                echo"
                <!DOCTYPE html>
                <html lang='pl'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <link rel='stylesheet' href='../../css/applications.css?v=<?php echo time(); ?>'>
                    <title>Aplikacje</title>
                </head>
                <body>
                <img alt='teams' src='../../graphics/logo2.png' id='logo'>
                <div id='flags'>
                    <a href='../british/applications_en.php'><img alt='english' src='../../graphics/britain2.png' class='languages'></a> 
                    <a href='../german/applications_de.php'><img alt='german' src='../../graphics/germany.png' class='languages'></a>
                    <img alt='polish' src='../../graphics/poland.png' class='languages'> 
                </div>
                    <main>
                        <h2>Wybierz aplikację:</h2>
                        <div>
                            <h1 id='ht'>Teams <img alt='teams' src='../../graphics/teams.png'></h1>
                            <h1 id='hl'>Outlook <img alt='outlook' src='../../graphics/outlook.png'></h1>
                        </div>
                        <div>
                            <h1 id='hd'>OneDrive <img alt='onedrive' src='../../graphics/onedrive.png'></h1>
                            <h1 id='hn'>OneNote <img alt='onenote' src='../../graphics/onenote.png'></h1>
                        </div> 
                    </main>
                    <script src='../../js/applications.js?v=<?php echo time(); ?>'>
                    </script>
                </body>
                </html>
                ";
            }
        } 
    }
    else{
        echo "Musisz wprowadzić wszystkie potrzebne informacje";
    }

    mysqli_close($connection);
?>
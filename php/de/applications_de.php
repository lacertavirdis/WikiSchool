<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "", "ws");

    if(isset($_POST["login"]) && isset($_POST["password"])){
        $login = $_POST["login"];
        $password = sha1($_POST["password"]);

        $exists = mysqli_query($connection, "SELECT username FROM users WHERE username LIKE '$login';");

        if(mysqli_num_rows($exists) == 0){
            echo "Sie haben kein Konto";
        }
        else{
            $q = "SELECT username, password FROM users
                WHERE username LIKE '$login' AND password LIKE '$password';";
            $result = mysqli_query($connection, $q);

            if(mysqli_num_rows($result) == 0){
                echo "Ihre Daten sind nicht korrekt";
            }
            else{
                echo "Sie wurden erfolgreich eingeloggt";
                $_SESSION['status'] = 'success';
            }
            if(isset($_SESSION["status"])){
                echo"
                <!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <link rel='stylesheet' href='../../css/applications.css?v=<?php echo time(); ?>'>
                    <title>Applications</title>
                </head>
                <body>
                <img alt='teams' src='../../graphics/logo2.png' id='logo'>
                <div id='flags'>
                    <a href='../british/applications_en.php'><img alt='english' src='../../graphics/britain2.png' class='languages'></a>
                    <img alt='german' src='../../graphics/germany.png' class='languages'> 
                    <a href='../polish/applications_pl.php'><img alt='polish' src='../../graphics/poland.png' class='languages'></a> 
                </div>
                    <main>
                        <h2>Wählen Sie eine Anwendung:</h2>
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
        echo "Sie müssen alle Eingabefelder ausfüllen";
    }

    mysqli_close($connection);
?>
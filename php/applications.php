<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "", "ws");

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
                $_SESSION['status'] = 'success';
            }
            if(isset($_SESSION["status"])){
                echo"
                <!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <link rel='stylesheet' href='../css/applications.css?v=<?php echo time(); ?>'>
                    <title>Applications</title>
                </head>
                <body>
                    <main>
                        <div>
                            <h1 id='ht'>Teams</h1>
                            <h1 id='hl'>Outlook</h1>
                        </div>
                        <div>
                            <h1 id='hd'>OneDrive</h1>
                            <h1 id='hn'>OneNote</h1>
                        </div> 
                    </main>
                    <script src='../js/applications.js?v=<?php echo time(); ?>'>
                    </script>
                </body>
                </html>
                ";
            }
        }
    }
    else{
        echo "You have to fill all the prompts";
    }

    mysqli_close($connection);
?>
<?php
    session_start();
    require_once "db.php";
    require_once "function.php";

    getParams();


    if (isset($user) && isset($pass)) {
        $sql = "SELECT * FROM `user` WHERE `name`='$user' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if($row && password_verify($pass, $row["pass"])) {
            $_SESSION["user"] = $user;
            header("Location: admin.php");
            die();
        }
        else {
            $msg = "Istifadeci adini ve parolunu duz yaz";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/login.css" />
    </head>
    <body>
        <header><h1>CMS Login</h1></header>
        <main>
            <form action="" method="POST">
                <label for="user">User name</label>
                <input type="text" name="user" id="user" required placeholder="User name" />
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" required placeholder="Your password" />
                <p id="msg"><?=$msg ?? ""?></p>
                <input type="submit" value="Log in"  />
            </form>
        </main>
    </body>
</html>

<?php
    mysqli_close($conn);
?>
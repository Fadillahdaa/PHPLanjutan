<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Cookies</title>
    <style>
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <?php
    $name = $email = "";
    $nameErr = $emailErr = "";

    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["u"])) {
            $nameErr = "Masukkan username";
        } else {
            $name = bersihkan_input($_POST["u"]);
            setcookie("username", $name, time() + 60, "/"); 
        }

        if (empty($_POST["p"])) {
            $emailErr = "Masukkan password";
        } else {
            $email = bersihkan_input($_POST["p"]);
            setcookie("password", $email, time() + 60, "/"); 
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>LOGIN DISINI</h2>
        Username: <input type="text" name="u" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        Password: <input type="password" name="p" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        <input type="submit" value="Login"> 
    </form>

    <?php
    if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
        echo "<h2>HASIL DATA</h2>";
        echo "Username: " . $_COOKIE["username"] . "<br>";
        echo "Password: " . $_COOKIE["password"] . "<br>";
    }
    ?>
</body>
</html>

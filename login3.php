<?php
session_start(); // Memulai session

$name = $email = "";
$nameErr = $emailErr = "";
$loginErr = "";

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["u"])) {
            throw new Exception("Masukkan username");
        } else {
            $name = bersihkan_input($_POST["u"]);
        }
        if (empty($_POST["p"])) {
            throw new Exception("Masukkan password");
        } else {
            $email = bersihkan_input($_POST["p"]);
        }

        if ($name === "Fadillahda" && $email === "1234") {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $name;
            header("Location: welcome2.php"); 
            exit();
        } else {
            throw new Exception("Username atau password salah");
        }
    }
} catch (Exception $e) {
    $loginErr = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="u">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        <input type="submit" value="Login">
        <br><br>
        <span class="error"><?php echo $loginErr;?></span>
    </form>
</body>
</html>

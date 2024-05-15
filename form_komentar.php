<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Nama: <input type="text" name="nama"><br>
        E-mail: <input type="email" name="email"><br>
        Komentar: <textarea name="komentar" rows="5" cols="40"></textarea><br>
        <input type="submit" value="Simpan">
        <input type="reset" value="Bersihkan">
    </form>
    <?php
    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        $name = $email = $comment = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["nama"]);
            $email = htmlspecialchars($_POST["email"]);
            $comment = htmlspecialchars($_POST["komentar"]);
            echo("Nama: " . $name . "<br>");
            echo("Email: " . $email . "<br>");
            echo("Komentar: " . $comment . "<br>");
            echo("<hr>");
        }
    ?>
</body>
</html>

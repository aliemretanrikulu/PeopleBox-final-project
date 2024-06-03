<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="register.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit" class="btn btn-success">Register</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include '../libs/functions.php';
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (registerUser($username, $email, $password)) {
            echo "Kayıt işlemi başarılı. <a href='login.php'>Login here</a>";
        } else {
            echo "Kayıt işlemi hatalı. Lütfen tekrar deneyin.";
        }
    }
    ?>
</body>
</html>

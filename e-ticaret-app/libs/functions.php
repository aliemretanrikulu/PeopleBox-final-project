<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "e-ticaret-app";

$conn = new mysqli($server, $username, $password, $database);
if ($conn-> connect_error) {
    die("Veritabanı bağlantı hatası: " . $conn-> connect_error);
}
$conn-> set_charset("utf8");


function registerUser($username, $email, $password) {
    global $conn;
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $passwordHash);
    return $stmt->execute();
}




function loginUser($username, $password) {
    global $conn;
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn-> prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = loginUser($username, $password);
    if ($user) {
        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];
        header("Location: dashboard.php");
    } else {
        echo "Giriş hatalı Lütfen tekrar deneyin.";
    }
}

function checkLoggedIn() {
    session_start();
    
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit;
    }
}

function add_product(&$products, $model, $brand, $price, $color_count, $stock, $image, $comment, $url)
{
    $new_product = [
        "model" => $model,
        "brand" => $brand,
        "price" => $price,
        "color_count" => $color_count,
        "stock" => $stock,
        "image" => $image,
        "comment" => $comment,
        "url" => $url
    ];

    array_push($products, $new_product);
}



?>

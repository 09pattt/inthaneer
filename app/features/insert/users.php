<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
}

$_SESSION['register_form'] = [
    'username' => $username,
    'password' => $password,
    'firstname' => $firstname,
    'surname' => $surname
];

$_SESSION['flash'] = [
    'origin' => '/pages/register'
];

try {
    $stmt = $pdo->prepare("INSERT INTO users (username, password, firstname, surname) VALUES (:username, :password, :firstname, :surname)");

    $stmt->execute([
        'username' => $username,
        'password' => $password,
        'firstname' => $firstname,
        'surname' => $surname
    ]);

    unset($_SESSION['register_form']);
    $_SESSION['flash']['message'] = 'ได้แล้วครับน้อง ตอนนี้ก็สามารถเข้าสู่ระบบด้วยบัญชีนี้ได้แล้ว';
    
    header("Location: /?route=/features/results");
} catch (PDOException $e) {
    $code = $e->getCode();

    if ($code == 23000) {
        $_SESSION['flash']['message'] = 'ไม่ได้นะน้อง มีคนใช้ username นี้ไปแล้วอะสิ';
    } elseif ($code == 22001) {
        $_SESSION['flash']['message'] = 'อันนี้ไม่ได้น้องงง ที่กรอกมามันยาวเกิ๊นนนนน';
    } else {
        $_SESSION['flash']['message'] = "ไม่ได้อะน้อง เอาโค้ดนี้ไปบอกพี่พัดนะ -> $code";
    }
    
    header("Location: /?route=/features/error");
}

exit;

?>
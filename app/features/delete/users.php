<?php

$username = $userInfo['username'];

$_SESSION['flash'] = [
    'origin' => '/pages/profile',
    'next' => '/pages/register'
];

try {
    $athleteStmt = $pdo->prepare("DELETE FROM users WHERE username = :username");
    $athleteStmt->execute([
        'username' => $username
    ]);

    unset($_SESSION['user']);

    $_SESSION['flash']['message'] = 'ลบข้อมูลของ ' . $username . ' แล้ว สามารถลงทะเบียนใหม่ได้เหมือนเดิม';

    header("Location: /?route=/features/results");
} catch (PDOException $e) {
    $code = $e->getCode();
    
    $_SESSION['flash']['message'] = "ไม่ได้อะน้อง เอาโค้ดนี้ไปบอกพี่พัดนะ -> $code";

    header("Location: /?route=/features/error");
}

exit;

?>
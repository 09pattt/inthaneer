<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $sport_id = $_POST['sport_id'];
}

$_SESSION['flash'] = [
    'origin' => '/pages/profile',
    'next' => '/pages/profile'
];

try {
    $athleteStmt = $pdo->prepare("DELETE FROM enrolled WHERE student_id = :student_id AND sport_id = :sport_id");
    $athleteStmt->execute([
        'student_id' => $student_id,
        'sport_id' => $sport_id
    ]);

    $_SESSION['flash']['message'] = 'ถอนตัวเรียบร้อย แต่ก็กลับเข้าร่วมได้เสมอนะ';
    
    header("Location: /?route=/features/results");
} catch (PDOException $e) {
    $code = $e->getCode();
    
    $_SESSION['flash']['message'] = "ไม่ได้อะน้อง เอาโค้ดนี้ไปบอกพี่พัดนะ -> $code";

    header("Location: /?route=/features/error");
}

exit;

?>
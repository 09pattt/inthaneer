<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
}

$_SESSION['flash'] = [
    'origin' => '/pages/profile',
    'next' => '/pages/profile'
];

try {
    $athleteStmt = $pdo->prepare("DELETE FROM athletes WHERE student_id = :student_id");
    $athleteStmt->execute([
        'student_id' => $student_id
    ]);

    $_SESSION['user']['is_athlete'] = false;

    $_SESSION['flash']['message'] = 'โอเคๆๆ ถอนตัวแล้ว แต่ว่าก็ยังลงสมัครใหม่ได้ตลอดนะ';
    
    header("Location: /?route=/features/results");
} catch (PDOException $e) {
    $code = $e->getCode();
    
    $_SESSION['flash']['message'] = "ไม่ได้อะน้อง เอาโค้ดนี้ไปบอกพี่พัดนะ -> $code";

    header("Location: /?route=/features/error");
}

exit;

?>
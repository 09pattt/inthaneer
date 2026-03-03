<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $sport_id = $_POST['sport_id'];
}

$_SESSION['flash'] = [
    'origin' => '/pages/insert/enrolled',
    'next' => '/pages/profile'
];

$athleteStmt = $pdo->prepare("SELECT * FROM athletes WHERE student_id = :student_id");
$athleteStmt->execute([
    'student_id' => $student_id
]);
$athlete = $athleteStmt->fetch();

if ($athlete) {
    $sportStmt = $pdo->prepare("SELECT * FROM enrolled WHERE student_id = :student_id");
    $sportStmt->execute([
        'student_id' => $student_id
    ]);

    $interval = 0;

    while ($inTable = $sportStmt->fetch()) {
        if ($sport_id == $inTable['sport_id']) {
            $_SESSION['flash']['message'] = "โน้ะ โน ไม่ใช่ว่าลงแข่งรายการนี้ไปแล้วหรอออ";
            header("Location: /?route=/features/error");
            exit;
        }
        $interval++;
    }

    if ($interval >= 3) {
        $_SESSION['flash']['message'] = "เสียใจด้วย แต่โรงเรียนให้ลงแค่คนละ 3 รายการต่อคน";
        header("Location: /?route=/features/error");
        exit;
    }

    try {
        $insertEnrolled = $pdo->prepare("INSERT INTO enrolled (student_id, sport_id) VALUES (:student_id, :sport_id)");
        $insertEnrolled->execute([
            'student_id' => $student_id,
            'sport_id' => $sport_id
        ]);
        $_SESSION['flash']['message'] = 'เย่ ได้ลงการแข่งขันนี้แล้วนะน้อง';
        header("Location: /?route=/features/results");
    } catch (PDOException $e) {
        $code = $e->getCode();
        if ($code == 23000) {
            $_SESSION['flash']['message'] = 'ไม่ได้นะ ระบบมีเลขประจำตัวนี้ไปแล้วอะดิ เราลงสมัครไปแล้วป่าว';
        } else {
            $_SESSION['flash']['message'] = "ไม่ได้อะน้อง เอาโค้ดนี้ไปบอกพี่พัดนะ -> $code";
        }
        header("Location: /?route=/features/error");
    }

} else {
    $_SESSION['flash']['message'] = "ระบบพี่หาเลขประจำตัวที่กรอกมาไม่เจออะ ใส่ผิดป่าวเนี้ย ลงสมัครรึยัง";
    header("Location: /?route=/features/error");
}

exit;

?>
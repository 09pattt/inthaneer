<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $grade = $_POST['grade'];
    $class = $_POST['class'];
    $gender = $_POST['gender'];
    $prefix = $_POST['prefix'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $student_id = $_POST['student_id'];
}

$_SESSION['flash'] = [
    'origin' => '/pages/insert/athletes'
];

try {
    $stmt = $pdo->prepare("INSERT INTO athletes (student_id, prefix, firstname, surname, gender, grade, class)
                          VALUES (:student_id, :prefix, :firstname, :surname, :gender, :grade, :class)");

    $stmt->execute([
        'student_id' => $student_id,
        'prefix' => $prefix,
        'firstname' => $firstname,
        'surname' => $surname,
        'gender' => $gender,
        'grade' => $grade,
        'class' => $class
    ]);

    $_SESSION['flash']['message'] = 'เย่ สวัสดีนักกีฬาอินทนิล เลิฟๆ';
    
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

exit;

?>
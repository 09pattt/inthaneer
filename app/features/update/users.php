<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $grade = $_POST['grade'];
    $class = $_POST['class'];
    $gender = $_POST['gender'];
    $prefix = $_POST['prefix'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $student_id = $_POST['student_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$_SESSION['flash'] = [
    'origin' => '/pages/update/users',
    'next' => '/pages/profile'
];

try {
    $stmt = $pdo->prepare("UPDATE users SET password = :password, student_id = :student_id, prefix = :prefix, firstname = :firstname, surname = :surname, gender = :gender, grade = :grade, class = :class WHERE username = :username");

    $stmt->execute([
        'username' => $username,
        'password' => $password,
        'student_id' => $student_id,
        'prefix' => $prefix,
        'firstname' => $firstname,
        'surname' => $surname,
        'gender' => $gender,
        'grade' => $grade,
        'class' => $class
    ]);

    $userStmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $userStmt->execute([
        'username' => $username
    ]);
    $user = $userStmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['user']['username'] = $user['username'];
    $_SESSION['user']['password'] = $user['password'];
    $_SESSION['user']['student_id'] = $user['student_id'];
    $_SESSION['user']['prefix'] = $user['prefix'];
    $_SESSION['user']['firstname'] = $user['firstname'];
    $_SESSION['user']['surname'] = $user['surname'];
    $_SESSION['user']['gender'] = $user['gender'];
    $_SESSION['user']['grade'] = $user['grade'];
    $_SESSION['user']['class'] = $user['class'];

    unset($_SESSION['register_form']);
    $_SESSION['flash']['message'] = 'อัปเดตข้อมูลแล้ว เปลี่ยนข้อมูลเดิมเป็นอันใหม่ให้แล้วคับ';
    
    header("Location: /?route=/features/results");
} catch (PDOException $e) {
    $code = $e->getCode();

    $_SESSION['flash']['message'] = "ไม่ได้อะน้อง เอาโค้ดนี้ไปบอกพี่พัดนะ -> $code";

    header("Location: /?route=/features/error");
}

exit;

?>
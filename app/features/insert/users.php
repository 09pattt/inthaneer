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

$_SESSION['register_form'] = [
    'grade' => $grade,
    'class' => $class,
    'gender' => $gender,
    'prefix' => $prefix,
    'firstname' => $firstname,
    'surname' => $surname,
    'student_id' => $student_id,
    'username' => $username,
    'password' => $password
];

$_SESSION['flash'] = [
    'origin' => '/pages/register',
    'next' => '/pages/signin'
];

try {
    $stmt = $pdo->prepare("INSERT INTO users (username, password, student_id, prefix, firstname, surname, gender, grade, class)
                          VALUES (:username, :password, :student_id, :prefix, :firstname, :surname, :gender, :grade, :class)");

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

    $_SESSION['user']['username'] = $username;
    $_SESSION['user']['password'] = $password;

    unset($_SESSION['register_form']);
    $_SESSION['flash']['message'] = 'ได้แล้วครับน้อง ตอนนี้ก็สามารถเข้าสู่ระบบด้วยบัญชีนี้ได้แล้ว';
    
    header("Location: /?route=/features/results");
} catch (PDOException $e) {
    $code = $e->getCode();

    if ($code == 23000) {
        $_SESSION['flash']['message'] = 'ไม่ได้นะน้อง มีคนใช้ username นี้ไปแล้วอะสิ';
    } else {
        $_SESSION['flash']['message'] = "ไม่ได้อะน้อง เอาโค้ดนี้ไปบอกพี่พัดนะ -> $code";
    }
    
    header("Location: /?route=/features/error");
}

exit;

?>
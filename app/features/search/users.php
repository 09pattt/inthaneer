<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$_SESSION['signin_form'] = [
    'username' => $username,
    'password' => $password
];

$_SESSION['flash'] = [
    'origin' => '/pages/signin',
    'next' => '/pages/profile'
];

try {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");

    $stmt->execute(['username' => $username]);

    $user = $stmt->fetch();

    if ($user) {
        if ($user['password'] == $password) {
            $_SESSION['flash']['message'] = 'ยืนยันตัวตนสำเร็จ สามารถเข้าใช้งานได้ปกติ';
            
            $_SESSION['user']['logged_in'] = true;
            $_SESSION['user']['username'] = $user['username'];
            $_SESSION['user']['password'] = $user['password'];
            $_SESSION['user']['student_id'] = $user['student_id'];
            $_SESSION['user']['prefix'] = $user['prefix'];
            $_SESSION['user']['firstname'] = $user['firstname'];
            $_SESSION['user']['surname'] = $user['surname'];
            $_SESSION['user']['gender'] = $user['gender'];
            $_SESSION['user']['grade'] = $user['grade'];
            $_SESSION['user']['class'] = $user['class'];
        
            $athleteStmt = $pdo->prepare("SELECT * FROM athletes WHERE student_id = :student_id");
            $athleteStmt->execute([
                'student_id' => $user['student_id']
            ]);
            $is_athlete = $athleteStmt->fetch();
            
            if ($is_athlete) {
                $_SESSION['user']['is_athlete'] = true;
            } else {
                $_SESSION['user']['is_athlete'] = false;
            }

            unset($_SESSION['signin_form']);
            header("Location: /?route=/features/results");
            exit;
        } else {
            $_SESSION['flash']['message'] = 'อ้ะๆ รหัสผิดนะ จำได้เปล่าเนี้ย';
        }
    } else {
        $_SESSION['flash']['message'] = 'ระบบหา username ที่กรอกมาไม่เจอเลย ลงทะเบียนรียัง?';
    }
    
    header("Location: /?route=/features/error");
} catch (PDOException $e) {
    $code = $e->getCode();
    
    $_SESSION['flash']['message'] = "ไม่ได้อะน้อง เอาโค้ดนี้ไปบอกพี่พัดนะ -> $code";
    
    header("Location: /?route=/features/error");
}

exit;

?>
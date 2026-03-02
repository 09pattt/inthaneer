<?php

require __DIR__ . '/../init.php';

require APP_DIR . '/app/features/connect.php';

$page_name = "หน้าเว็บ";

define('NAVSIDE', APP_DIR . '/app/components/navside.php');
define('HEADER', APP_DIR . '/app/components/header.php');
define('FOOTER', APP_DIR . '/app/components/footer.php');
define('LOGO', APP_DIR . '/app/components/logo.php');
define('DATALISTS', APP_DIR . '/app/components/datalists.php');

session_start();

$route = $_GET['route'] ?? '/pages/home';

$isLoggedIn = $_SESSION['user']['logged_in'] ?? false;

$userInfo = [
    'username' => $_SESSION['user']['username'] ?? null,
    'student_id' => $_SESSION['user']['student_id'] ?? null,
    'prefix' => $_SESSION['user']['prefix'] ?? null,
    'firstname' => $_SESSION['user']['firstname'] ?? null,
    'surname' => $_SESSION['user']['surname'] ?? null,
    'gender' => $_SESSION['user']['gender'] ?? null,
    'grade' => $_SESSION['user']['grade'] ?? null,
    'class' => $_SESSION['user']['class'] ?? null,
];

$public_route = [
    '/pages/home',
    '/pages/notfound',
    '/pages/about',
    '/pages/register',
    '/pages/signin',
    '/pages/table/athletes',
    '/pages/table/enrolled',
    '/pages/table/sports',
    '/features/connect',
    '/features/error',
    '/features/results',
    '/features/insert/users',
    '/features/search/users'
];

if (!$isLoggedIn && !in_array($route, $public_route)) {
    require APP_DIR . '/app/pages/signin.php';
    exit;
}

if (!preg_match('/^[a-zA-Z0-9\/\-]+$/', $route)) {
    require APP_DIR . '/app/pages/notfound.php';
    exit;
}

$file = APP_DIR . '/app' . $route . '.php';

if (file_exists($file)) {
    require $file;
} else {
    require APP_DIR . '/app/pages/notfound.php';
}
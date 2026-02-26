<?php

require __DIR__ . '/../init.php';

$page_name = "หน้าเว็บ";

$page = $_GET['page'] ?? 'home';

if (!preg_match('/^[a-zA-Z0-9\/\-]+$/', $page)) {
    require APP_DIR . '/app/pages/notfound.php';
    exit;
}

$file = APP_DIR . '/app/pages/' . $page . '.php';

if (file_exists($file)) {
    require $file;
} else {
    require APP_DIR . '/app/pages/notfound.php';
}
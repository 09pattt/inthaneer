<?php

require APP_DIR . '/app/features/connect.php';

$page_name = "หน้าแรก";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require APP_DIR . '/app/components/header.php'; ?>
    <style>
        .banner {
            width: 100%;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .banner_text {
            font-family: "Chula";
            font-size: 100px;
        }

        .banner1 {
            color: #fafafa;
            background-color: #602560;
        }

        .banner2 {
            color: #602560;
            background-color: #fafafa;
        }
    </style>
</head>
<body>
    <?php require APP_DIR . '/app/components/navside.php'; ?>

    <div id="main_space">
        <div class="banner banner1">
            <h1 class="banner_text">INTHANIN</h1>
        </div>
        <div class="banner banner2">
            <h1 class="banner_text">TRIAM'NOM</h1>
        </div>
        <div class="banner banner1">
            <h1 class="banner_text">อินทนิล</h1>
        </div>
        <div class="banner banner2">
            <h1 class="banner_text">เตรียมฯน้อม</h1>
        </div>
        <div class="banner banner1">
            <h1 class="banner_text">INTHANIN</h1>
        </div>
        <div class="banner banner2">
            <h1 class="banner_text">TRIAM'NOM</h1>
        </div>
        <div class="banner banner1">
            <h1 class="banner_text">อินทนิล</h1>
        </div>
        <div class="banner banner2">
            <h1 class="banner_text">เตรียมฯน้อม</h1>
        </div>
    </div>
</body>
</html>
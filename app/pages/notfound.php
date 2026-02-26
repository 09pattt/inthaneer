<?php

require APP_DIR . '/app/features/connect.php';

$page_name = "ข้อผิดพลาด";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require APP_DIR . '/app/components/header.php'; ?>
    <style>
        body {
            background-color: #FF8C00;
        }

        #url_box {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 0 1rem 0;
        }

        #url_box p {
            height: fit-content;
            width: 640px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            font-family: monospace;
            font-size: 15px;
            padding: 5px;
            background-color: #f2f2f2aa;
            border-radius: 5px;
        }

        #top_title {
            font-weight: 700;
            text-align: center;
            font-size: 100px;
        }

        #top_subtitle {
            color: #202040;
            text-align: center;
            font-size: 25px;
        }

        #top_img_cover {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem 0 1rem 0;
        }

        #top_img {
            height: 400px;
        }

        #return_button_cover {
            display: flex;
            justify-content: center;
        }

        #return_button {
            padding: 8px;
            border-radius: 5px;
            color: #808080;
            background-color: #f2f2f280;
            text-decoration: none;
            font-family: "Chula";
            font-size: 20px;
            transition: all 200ms ease;
        }

        #return_button:hover {
            color: #fff;
            background-color: #202040;
            transition: all 100ms ease;
            transform: scale(1.1);
        }

        #return_button:active {
            transform: none;
        }
    </style>
</head>
<body>
    <?php require APP_DIR . '/app/components/navside.php'; ?>

    <div id="main_space">
        <h1 id="top_title">404 NOT FOUND</h1>
        <div id="url_box">
            <p>https://inthanin.team/?page=<?= $page ?></p>
        </div>
        <h2 id="top_subtitle">โอ้ะ! ดูเหมือนว่า URL ของเธอจะไม่ถูกต้องนะ พี่คนนี้เลยหาหน้าเว็บไม่เจอ</h2>
        <div id="top_img_cover">
            <img src="/assets/images/elements/curious.png" alt="Curious guy" id="top_img">
        </div>
        <div id="return_button_cover">
            <a href="/" id="return_button">กลับหน้าแรก</a>
        </div>
    </div>
</body>
</html>
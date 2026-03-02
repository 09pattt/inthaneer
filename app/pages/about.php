<?php

$page_name = "เกี่ยวกับ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require HEADER; ?>
    <style>
        #header_logo_cover {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem 0 1rem 0;
        }

        .header_logo {
            transition: all 500ms ease;
        }

        .header_logo:hover {
            transform: translate(-5px, -5px);
            transition: all 200ms ease;
            filter: drop-shadow(10px 10px 5px #00000080);
        }

        #header_logo1 {
            height: 100px;
        }

        #header_logo2 {
            margin: 0 3rem 0 3rem;
            height: 120px;
        }

        #header_logo3 {
            height: 120px;
        }

        .header_title {
            font-weight: 700;
            text-align: center;
            background-color: #602560;
            color: #ffffff;
        }

        .images_cover {
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 5rem 0 5rem 0;
        }

        .images {
            width: 100%;
            border-radius: 1rem;
            transition: all 500ms ease;
        }

        .images:hover {
            transform: translate(-5px, -5px);
            transition: all 200ms ease;
            filter: drop-shadow(10px 10px 5px #00000080);
        }

        .image_box p {
            margin-top: 1rem;
            padding: 5px;
            border-radius: 5px;
            font-family: "Chula";
            font-size: 20px;
            text-align: center;
            transition: all 500ms ease;
        }

        .image_box:hover p{
            transform: scale(1.2);
            transition: all 200ms ease;
        }

        .sponsors_image_box {
            width: 30%;
        }

        #image_box1 {
            width: 20%;
        }

        #image_box2 {
            width: 20%;
        }

        #image_box3 {
            width: 20%;
        }
    </style>
</head>
<body>
    <?php require NAVSIDE; ?>

    <div id="main_space">
        <div id="header_logo_cover">
            <img src="/assets/images/logo/Inthanin.png" alt="Inthanin Logo" id="header_logo1" class="header_logo">
            <img src="/assets/images/logo/TUN.png" alt="Triam'nom Logo" id="header_logo2" class="header_logo">
            <img src="/assets/images/logo/SCIT.png" alt="SCIT Logo" id="header_logo3" class="header_logo">
        </div>
        <h1 class="header_title">สมาชิกแก๊งผู้จัดทำ</h1>
        <div class="images_cover">
            <div id="image_box1" class="image_box">
                <img src="/assets/images/people/focus.png" alt="Focus" id="image1" class="images">
                <p>โฟกัส</p>
            </div>
            <div id="image_box2" class="image_box">
                <img src="/assets/images/people/pat.png" alt="Pat" id="image2" class="images">
                <p>พัด</p>
            </div>
            <div id="image_box3" class="image_box">
                <img src="/assets/images/people/bamboo.png" alt="Bamboo" id="image3" class="images">
                <p>แบมบู</p>
            </div>
        </div>

        <h1 class="header_title">สปอนเซอร์</h1>
        <div class="images_cover">
            <div class="sponsors_image_box image_box">
                <img src="/assets/images/sponsors/chula.png" alt="CU" class="images">
            </div>
            <div class="sponsors_image_box image_box">
                <img src="/assets/images/sponsors/kmitl.png" alt="KMITL" class="images">
            </div>
        </div>
        <?php require FOOTER; ?>
    </div>
</body>
</html>